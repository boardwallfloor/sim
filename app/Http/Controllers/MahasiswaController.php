<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
  public function show (){
  	$data = Mahasiswa::all();
  	return view('test/show',compact('data'));
  }
}
