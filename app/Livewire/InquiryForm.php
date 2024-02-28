<?php

namespace App\Livewire;

use App\Models\Inquiry;
use App\Notifications\InquiryFormNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class InquiryForm extends Component
{

    public $name;
    public $phone;
    public $page;
    public $terms;

    public function submit()
    {
        $validatedData = $this->validate([
            'name'=> 'required|string|max:255',
            'phone'=> 'required|string|max:20',
            'page'=> 'required',
            'terms'=>'required|accepted'
        ]);

        Inquiry::query()->create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'page_name' => $this->page,
        ]);
        Notification::route('mail','homesweethome@gmail.com')
            ->notify(new InquiryFormNotification($validatedData));

        session()->flash('success', 'Your message has been sent successfully. We will get back to you as soon as possible. Thanks!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.inquiry-form');
    }
}
