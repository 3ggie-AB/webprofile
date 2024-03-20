<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sambutan extends Controller
{
    public function index(){
        $sambutan_title='';
        $sambutan_head='';
        $sambutan_body='';
        $sambutan_foot='';
        session()->put('dataTitleSambutan',$sambutan_title);
        session()->put('dataTitleSambutan',$sambutan_head);
        session()->put('dataTitleSambutan',$sambutan_body);
        session()->put('dataTitleSambutan',$sambutan_foot);
    }
}
