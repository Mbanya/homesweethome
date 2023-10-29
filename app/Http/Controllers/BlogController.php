<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->where('status',1)->get();
        return view('blog.index',['blogs'=>$blogs]);
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
