<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {

    }

    public function index(): string
    {
        return view('login');
    }
}