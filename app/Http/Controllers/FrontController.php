<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function home()
    {
        return Inertia('App/Home');
    }
    public function appointments()
    {
        return Inertia('App/Appointments');
    }
    public function following()
    {
        return Inertia('App/Following');
    }
    public function purchases()
    {
        return Inertia('App/Purchases');
    }
    public function profile()
    {
        return Inertia('App/Profile');
    }

    public function login()
    {
        return Inertia('App/Login');
    }
    public function register()
    {
        return Inertia('App/Register');
    }
}
