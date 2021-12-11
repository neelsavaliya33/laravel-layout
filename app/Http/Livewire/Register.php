<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{

    public $name, $email, $password, $password_confirmation;
    protected $rules = [
        'name' => "required",
        "email" => ["required", "email","unique:users"],
        "password" => ["required", "min:8", 'confirmed']
    ];

    public function mount()
    {
        if (auth()->check())
            return redirect('/');
    }
    public function render()
    {
        return view('livewire.register')
            ->extends('layouts.main')
            ->section('content')
            ->layoutData([
                'title' => 'register',
                'noSidebar' => true
            ]);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $user = User::create([
            'name' => $validatedData["name"],
            'email' => $validatedData["email"],
            'password' => bcrypt($validatedData["password"])
        ]);
        event(new Registered($user));


        return redirect(route('login'));
    }
}
