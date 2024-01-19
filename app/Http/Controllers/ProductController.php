<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\storeBookRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Book::all();
        return view('admin.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::all();
        return view('admin.product.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeBookRequest $request)
    {
        //
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/book_image',$fileName);
            $validatedData['image'] = $fileName;
        }
        $book = Book::create($validatedData);
        return redirect()->route('products.index')->with(['status'=>'Successfully Added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::find($id);
        $category = Category::all();
        return view('admin.product.edit', compact('book', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $book->title = $validatedData['title'];
        $book->author = $validatedData['author'];
        $book->description = $validatedData['description'];
        $book->price = $validatedData['price'];
        $book->category_id = $validatedData['category_id'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '_' . $image->getClientOriginalName();
            $image->storeAs('book_image', $fileName, 'public');
            $book->image = $fileName;
        }

        $book->save();

        return redirect()->route('products.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = Book::findOrFail($id);
        $filename = $book['image'];

        if (Storage::disk('public')->exists('book_image/' . $filename)) {
            Storage::disk('public')->delete('book_image/' . $filename);
        }
        $book->delete();
        return redirect()->route('products.index')->with('delete', 'Deleted successfully');
    }
}
