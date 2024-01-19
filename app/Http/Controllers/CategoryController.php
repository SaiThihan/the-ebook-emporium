<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // direct category list page
    public function categoryList(){
        $categories = Category::when(request('key'),function($query){
                                $query->where('name','like','%'.request('key').'%');
                                })->orderBy('id','desc')->paginate(10);
        $categories->appends(request()->all());
        Paginator::useBootstrap();
        $count = 1;
        return view('admin.category.list',compact('categories','count'));
    }

    // category create
    public function createCategory(Request $request){
        $this->categoryValidationCheck($request);
        $data = ['name' => $request->categoryName];
        Category::create($data);
        return redirect()->route('category#list')->with(['categoryCreateSuccess' => 'Category Created...']);
    }

    // category delete
    public function deleteCategory($id){
        Category::where('id',$id)->delete();
        return back()->with(['categoryDeleteSuccess' => 'Category Deleted...']);
    }

    // direct category edit page
    public function categoryEditPage($id){
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    // category edit and update
    public function categoryEdit(Request $request){
        $this->categoryValidationCheck($request);
        $categoryName = $this->getCategoryName($request);
        Category::where('id',$request->categoryId)->update($categoryName);
        return redirect()->route('category#list')->with(['categoryUpdateSuccess' => 'Category updated...']);
    }

    // get category name
    private function getCategoryName($request){
        return [
            'name' => $request->categoryName,
        ];
    }

    // category validation check
    private function categoryValidationCheck($request){
        Validator::make($request->all(),[
            'categoryName' => 'required|min:2|unique:categories,name,'.$request->categoryId,
        ])->validate();
    }
}
