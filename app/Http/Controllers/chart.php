<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartjs;

class chart extends Controller
{
    public function index()
    {

        $data=wallet::all();
        return view('googlepiechart',compact('data'));    }

    }
