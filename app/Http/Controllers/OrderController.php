<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Mail\OrderAccepted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\orderBookRequest;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Order::all();
        return view('admin.order.index',compact('data'));
    }

    public function show($id)
    {
        $order = Order::with('book')->findOrFail($id);
        return view('admin.order.view', compact('order'));
    }

    public function verify($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'verified';
        $order->save();

        $book = Book::findOrFail($order->book_id);
        $pdfUrl = $book->url_link;
        
        Mail::to($order->email)->send(new OrderAccepted($order, $pdfUrl));

        return redirect()->route('order.index')->with('success', 'Payment verified and email sent successfully!');
    }

    public function destroy($id)
    {
        //
        $order = Order::findOrFail($id);
        $filename = $order['photo_url'];
        if (Storage::disk('public')->exists('payment_screenshots/' . $filename)) {
            Storage::disk('public')->delete('payment_screenshots/' . $filename);
        }
        $order->delete();
        return redirect()->route('order.index')->with('delete', 'Order deleted successfully.');
    }

    
    public function createOrder(Request $request)
    {
    // validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'photo_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'book_id' => 'required',
        ]);


        // handle uploaded image
        if ($request->hasFile('photo_url')) {
            $image = $request->file('photo_url');
            $fileName = uniqid() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/payment_screenshots',$fileName);
            $validatedData['photo_url'] = $fileName;
        }

        // create new order
        $order = new Order;
        $order->name = $validatedData['name'];
        $order->email = $validatedData['email'];
        $order->photo_url = $validatedData['photo_url'];
        $order->book_id = $validatedData['book_id'];
        $order->save();

        return redirect()->route('user#product#detail', ['id' => $validatedData['book_id']])->with('order', 'Order submitted successfully.');
    }
}


