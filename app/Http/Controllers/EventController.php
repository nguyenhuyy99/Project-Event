<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }

    public function getLogin(){
        return view('pages.login');
    }
    public function getSignin(){
        return view('pages.signin');
    }
}
