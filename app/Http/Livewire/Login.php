<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;
    protected $rules = [
        'email' => "required",
        'password' => "required"
    ];

    public function FunctionName()
    {
        if(auth()->check()){
            return redirect(route('dashboard'));
        }
    }

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.main')
            ->section('content')
            ->layoutData([
                'noSidebar' => true,
                'title' => 'Login'
            ]);
    }
    public function submit()
    {
        $validatedData = $this->validate();
        if (!auth()->attempt($validatedData, $this->remember)) {
            throw ValidationException::withMessages([
                'login' => "Invalid credential"
            ]);
        }
        return redirect(route('dashboard'));
    }
}
