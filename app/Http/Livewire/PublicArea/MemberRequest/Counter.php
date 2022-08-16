<?php

namespace App\Http\Livewire\PublicArea\MemberRequest;

use App\Mail\WelcomeUser;
use App\Models\Member;
use Axc\Member\MemberGear;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Counter extends Component
{
    public $member = [];

    /**
     * @return [type]
     */
    public function render()
    {
        return view('public-area.pages.RequestMembership.counter');
    }

    /**
     * @return [type]
     */
    public function mount(){

    }
    /**
     * @return [type]
     */
    public function userShow(){
            $this->member = MemberGear::find(1);
    }
    /**
     * @return [type]
     */
    public function rules(){
        return [
        'member.name' => 'required|string|min:4',
        'member.email'=>'required|email|unique:members,email',
        'member.address' => 'required|string',
        'member.contact' => 'required|unique:members,contact'
        ];
    }
    /**
     * @param mixed $propertyName
     *
     * @return [type]
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**
     * @return [type]
     */
    public function submitMember(){
        $validated = $this->validate();
         MemberGear::create($validated['member']);
            dd($validated['member']);
    }
    /**
     * @return [type]
     */
    public function messages(){
        return [
            'member.name.string'=> 'include only Strings',
            'member.address.string' => 'include strings only.'
        ];
    }
}
