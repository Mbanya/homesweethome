<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Property;
use App\Models\Testimonial;
use App\Notifications\ContactFormNotification;
use App\Notifications\InquiryFormNotification;
use Illuminate\Http\Request;
use Notification;

class PageController extends Controller
{
    public function index()
    {
        $page_name = 'Home Page';
        $featured_projects = Property::query()->where('featured','=','1')->paginate(4);
        $testimonials = Testimonial::query()->where('status',1)->get();
        $blogs = Blog::query()->where('status',1)->paginate(4);
        return view('index',
            [
                'featured_projects' => $featured_projects,
                'testimonials' => $testimonials,
                'blogs' => $blogs,
                'page_name'=>$page_name
                ]);
    }

    public function about()
    {
        $page_name = 'About Page';
        return view('pages.about',['page_name'=>$page_name]);
    }

    public function mission()
    {
        $page_name = 'Mission Page';
        return view('pages.mission',['page_name'=>$page_name]);
    }

    public function team()
    {
        $page_name = 'Team Page';
        return view('pages.team',['page_name'=>$page_name]);
    }

    public function contact()
    {
        $page_name = 'Contact Page';
        return view('pages.contact',['page_name'=>$page_name]);
    }

    public function services()
    {
        $page_name = 'Services Page';
        return view('pages.services',['page_name'=>$page_name]);
    }

    public function faq()
    {
        $page_name = 'FAQ Page';
        $faqs = Faq::query()->where('status',1)->get();
        return view('pages.faq',['page_name'=>$page_name,'faqs'=>$faqs]);
    }

    public function testimonials()
    {
        $page_name = 'Testimonial Page';
        return view('pages.testimonial',['page_name'=>$page_name]);
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

        Contact::query()->create($request->all());

        Notification::route('mail','homesweethome@gmail.com')->notify(new ContactFormNotification($validatedData));

        return redirect()->back()->with(['success'=>'Message has been sent successfully. Our representative will contact you shortly']);

    }

    public function inquirySubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|string|max:255',
            'phone'=> 'required|string|max:20',
            'page_name'=> 'required',
            'terms'=>'required|accepted'
        ],[
            'terms.accepted'=>'Please accept the terms and conditions'
        ]);

        Inquiry::query()->create($request->all());
        Notification::route('mail','homesweethome@gmail.com')->notify(new InquiryFormNotification($validatedData));

        return redirect()
            ->back()
            ->with(['success'=>'Message has been sent successfully. Our representative will contact you shortly']);

    }
}
