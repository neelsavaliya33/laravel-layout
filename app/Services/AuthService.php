<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    public function logout()
    {
        auth()->logout();
        return redirect(route('login'));
    }
}
