<?php

namespace App\Http\Controllers;

use App\Models\AllDataModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Form;

class UserController extends Controller
{
    public function register(Request $request)
    {
// Validate the user's input
        $validatedData = $request->validate([
            'login' => 'required',
            'password' => 'required',
            'is_admin' => 'nullable|boolean',
            'name'=>'required'

            ]);

// Create a new user

        $user = User::create([
            'login' => $validatedData['login'],
            'password' => Hash::make($validatedData['password']),
            'is_admin' => $validatedData['is_admin'] ?? 0,
            'name' => $validatedData['name'],
        ]);

// Log the user in
        Auth::login($user);

// Redirect to the dashboard
        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
// Validate the user's input
        $validatedData = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

// Attempt to log the user in
        if (Auth::attempt($validatedData)) {
            $user = Auth::user();
            if($user->is_admin == 1){
                return redirect()->route('adminPage');
            }else{
                return redirect()->route('userPage');
            }
// Redirect to the dashboard
        } else {
// Redirect back with an error message
            return redirect()->back()->with('error', 'Invalid login or password');
        }
    }
    public function newDataAppend()
    {
        return view('createNewData');
    }

    public function adminPage() {
        $reviews = new AllDataModel();
        return view('adminPage',['reviews' => $reviews->all()]);
    }

    public function createNewData(Request $request) {
        $valid = $request->validate([
            'date' => 'required',
            'job' => 'required',
            'status' => 'required',
            'mate' => 'required',
            'payment' => 'required'
// 'comms' => 'required',
// 'jobtype' => 'required'
        ]);
        $data = new AllDataModel();
        $data->date = $request->input('date');
        $data->worker = $request->input('worker');
        $data->job = $request->input('job');
        $data->status = $request->input('status');
        $data->mate = $request->input('mate');
        $data->payment = $request->input('payment');
        $data->comments = $request->input('comments');
        $data->job_type = $request->input('job_type');


        $data->save();
        return redirect()->route('adminPage');
    }

    public  function userPage() {
        $reviews = new AllDataModel();
        return view('userPage',['reviews' => $reviews->all()]);
    }

    public function __construct()
    {
        $this->middleware(['admin'])->only(['create', 'store', 'edit', 'update', 'destroy']);
    }
    public function signUp() {
        return view('signUp');
    }

    public function dashboard() {
        return view('dashboard');
    }
}
