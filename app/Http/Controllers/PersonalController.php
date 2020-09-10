<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

class PersonalController extends Controller
{
    public function index(){

        $personal=Personal::all();

        return view('personal',['personal'=>$personal]);

    }

    public function show(){

    }
}
