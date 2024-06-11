<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index()
    {
        return view("new.reg");
    }
    public function register()
    {
        return view("new.home");
    }
    public function done()
    {
        return view('new.success')->with('message','Registration will be accepted very soon.');
    }

}
