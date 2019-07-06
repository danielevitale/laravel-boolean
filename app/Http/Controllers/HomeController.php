<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    return view ('home');
  }

  public function privacy_policy(){
    return view ('privacy');
  }

  public function lavora(){
    return view ('lavora_con_noi');
  }


}
