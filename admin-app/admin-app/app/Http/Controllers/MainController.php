<?php

namespace App\Http\Controllers;

use App\Models\AllDataModel;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function home() {
        return view('home');
    }
    public function signIn() {
        return view('SignForm');
    }
    public function signInAdmin() {
        return view('SignAdmin');
    }
    public function signInCheck(Request $request) {
        $valid = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
    }
    public function signInAdminCheck(Request $request) {
        $valid = $request->validate([
            'login' => 'required'
        ]);
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


}
