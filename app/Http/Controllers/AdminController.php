<?php

namespace App\Http\Controllers;

use App\Category;
use App\ConSubCat;
use App\Contents;
use App\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function insert_category_form()
    {
        return view('admin.insert_category_form');
    }

    public function insert_category(Request $request)
    {
        $category = new Category;
        $category->title = $request->input('title');
        $category->save();

        return view('admin.insert_category_form');
    }

    public function insert_sub_category_form()
    {
        $categories = Category::all()->toArray();
        return view('admin.insert_sub_category_form')->with(compact('categories'));
    }

    public function insert_sub_category(Request $request)
    {
        $subCategory = new SubCategory;
        $subCategory->title = $request->input('title');
        $subCategory->cat_id = $request->input('category');
        $subCategory->save();

        $categories = Category::all()->toArray();
        return view('admin.insert_sub_category_form')->with(compact('categories'));
    }

    public function insert_content_form()
    {
//        echo "<pre>";
//        $categories = Category::with('sub_category')->get()->toArray();
        $subCategories = SubCategory::with('category')->get()->toArray();
//        print_r($subCategories);

        return view('admin.insert_content_form')->with(compact('subCategories'));
    }

    public function insert_content(Request $request)
    {
        $content = new Contents;
        $content->title = $request->input('title');
        $content->text = $request->input('text');
//        $content->cat_id = $request->input('sub_category');
        $content->save();

        print_r($content->toArray()['id']);

        $conSubCat = new ConSubCat;
        $conSubCat->con_id = $content->toArray()['id'];
        $conSubCat->sub_cat_id = $request->input('sub_category');
        $conSubCat->save();

        $subCategories = SubCategory::with('category')->get()->toArray();
        return view('admin.insert_content_form')->with(compact('subCategories'));
    }

    public function contentlist()
    {
        $contents = Contents::all()->toArray();
        return view('admin.content_list')->with(compact('contents'));
    }

    public function delete_content($id)
    {
        $content = Contents::find($id);
        $content->delete();

        return redirect()->route('contentlist');
    }
}
