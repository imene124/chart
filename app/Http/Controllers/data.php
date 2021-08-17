<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data extends Controller
{
    public function submit() {
        $data= new data();
        $data->name= request('LTC');
        $data->email= request('BTC');
        $data->password= request('ETH');
        $data->save();
        return view('chartjs');
    }}
