<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->where('status',1)->get();
        $categories = Category::query()->get();
        return view('blog.index',[
            'blogs'=>$blogs,
            'categories'=>$categories
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $title)
    {
        $blog = Blog::query()->where('title',$title)->firstOrFail();

        return view('blog.show',['blog'=>$blog]);
    }


}
