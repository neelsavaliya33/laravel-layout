<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    private $authService;


    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function logout()
    {
        return $this->authService->logout();
    }
}
