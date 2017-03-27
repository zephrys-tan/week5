<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
    	$nama_variable=$request->input('nama');
    	$gender_kelamin= $request->input('gender');
    	$bebas_aja= $request->input('email');
    	$weapon= $request->input('weapon');

    	return view('forms')
    	->with('nama',$nama_variable)
    	->with('gender', $gender_kelamin)
    	->with('weapon', $weapon)
    	->with('email', $bebas_aja);


    }
}
