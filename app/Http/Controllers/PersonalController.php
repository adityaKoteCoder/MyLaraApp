<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

use App\user;

class PersonalController extends Controller
{
    public function index(){

        $alldata=Personal::all();

        return view('personal.index',['alldata'=>$alldata]);

    }

    public function show($id){

        $pdata=Personal::find($id);

        return view('personal.show',['pdata'=>$pdata]);

        

    }
}
