<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Property;
use App\Models\Testimonial;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Notification;

class PageController extends Controller
{
    public function index()
    {

        $featured_projects = Property::query()->where('featured','=','1')->paginate(4);
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

    public function testimonials()
    {
        return view('pages.testimonial');
    }

    public function contactSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|string|max:255',
            'phone'=> 'required|string|max:20',
            'email'=> 'required|email|max:50',
            'message'=>'required|string',
            'terms'=>'required|accepted'
        ],[
            'terms.accepted'=>'Please accept the terms and conditions'
        ]);

        Notification::send('homesweethome@gmail.com',new ContactFormNotification($validatedData));

        return redirect()->with(['success'=>'Message has been sent successfully. Our representative will contact you shortly']);

    }
}
