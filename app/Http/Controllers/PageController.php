<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $featured_projects = Property::query()->where('featured','=','1')->get();
        $testimonials = Testimonial::query()->where('status',1)->get();
        $blogs = Blog::query()->where('status',1)->get();
        return view('index',
            [
                'featured_projects' => $featured_projects,
                'testimonials' => $testimonials,
                'blogs' => $blogs
                ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
