<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Notifications\ContactFormNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ContactForm extends Component
{

    public $email;
    public $name;
    public $message;
    public $phone;
    public $terms;


    public function submit()
    {
        $validatedData = $this->validate([
            'name'=> 'required|string|max:255',
            'phone'=> 'required|string|max:20',
            'email'=> 'required|email|max:50',
            'message'=>'required|string',
            'terms'=>'required|accepted'
        ]);

        Contact::query()->create([
            'name'=> $validatedData['name'],
            'phone'=> $validatedData['phone'],
            'email'=>$validatedData['email'],
            'message' => $validatedData['message']
        ]);

        Notification::route('mail','homesweethome@gmail.com')
            ->notify(new ContactFormNotification($validatedData));

        session()->flash('success', 'Your message has been sent successfully. We will get back to you as soon as possible. Thanks!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
