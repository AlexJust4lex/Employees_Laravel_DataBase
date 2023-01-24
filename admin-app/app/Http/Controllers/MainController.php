<?php

namespace App\Http\Controllers;

use App\Models\AllDataModel;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function home() {
        return view('home');
    }
    public function signIn() {
        return view('SignIn');
    }

    public function signUp() {
        return view('signUp');
    }




}
