<?php

namespace App\Http\Livewire\PublicArea\MemberRequest;

use App\Mail\WelcomeUser;
use App\Models\Member;
use axc\Gears\MemberGear;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Counter extends Component
{

    // public $user;
    public $member = [];
    // public $name;
    // public $email;
    // public $address;
    // public $contact;


    public function render()
    {
        return view('member-area.pages.home.components.counter');
    }

    public function mount(){

    }
    public function userShow(){
            $this->member = MemberGear::find(1);
    }
    public function rules(){
        return [
        'member.name' => 'required|string|min:4',
        'member.email'=>'required|email|unique:members,email',
        'member.address' => 'required|string',
        'member.contact' => 'required|unique:members,contact'
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submitMember(){
        $validated = $this->validate();
         MemberGear::create($validated['member']);
            dd($validated['member']);
    }
    public function messages(){
        return [
            'member.name.string'=> 'include only Strings',
            'member.address.string' => 'include strings only.'
        ];
    }
}
