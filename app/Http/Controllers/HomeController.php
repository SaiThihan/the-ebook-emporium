<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Book::orderBy('id','desc')->take(8)->get();
        $categories = Category::get();
        $books = Category::select('categories.*','books.*','categories.name as category_name','books.title as book_title')
        ->join('books','categories.id','books.category_id')
        ->take(8)
        ->get();
        return view('user.home.home',compact('products','categories','books'));
    }

    public function shop(){
        $categories = Category::get();
        $books = Category::select('categories.*','books.*','categories.name as category_name','books.title as book_title')
        ->join('books','categories.id','books.category_id')
        ->get();
        return view('user.home.shop',compact('categories','books'));
    }

    public function about(){
        return view('user.home.about_us');
    }

    public function dashboard(){
        return view('user.home.dashboard');
    }

    public function detail($id){
        $book_id = $id;
        $products = Book::where('id',$id)->first();
        $books = Book::take(6)->get();
        return view('user.home.product_detail',compact('book_id','products','books'));
    }

    // direct payment page
    public function payment($id){
        $bookData = Book::findOrFail($id);
        $book_id = $id;
        return view('user.home.payment',compact('book_id','bookData'));
    }
}
