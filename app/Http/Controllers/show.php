<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contents;
use Illuminate\Http\Request;

class show extends Controller
{
    public function index()
    {
//        $contents = Contents::all()->toArray();
        $contents = Contents::with('subcategory')->get()->toArray();

        $contentsArr = array();

        foreach ($contents as $key => $content)
        {
            $tempArr = array();
            $tempArr['id'] = $content['id'];
            $tempArr['title'] = $content['title'];
            $tempArr['text'] = $content['text'];
            foreach ($content['subcategory'] as $key1 => $subcategory)
            {
                $tempArr['subcategory'][$key1]['id'] = $subcategory['id'];
                $tempArr['subcategory'][$key1]['title'] = $subcategory['title'];
                $tempArr['subcategory'][$key1]['cat_id'] = $subcategory['cat_id'];
                $category = Category::find($subcategory['cat_id'])->toArray();
                $tempArr['subcategory'][$key1]['cat_name'] = $category['title'];
            }

            array_push($contentsArr, $tempArr);
        }

        dd($contentsArr);
    }
}
