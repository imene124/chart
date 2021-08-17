@extends('layout')
    <!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Charts</b></div>
            <div class="panel-body">
                <canvas id="canvas" height="280" width="600"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

<script>
    "use strict";

    //store the id in canvas  of html in a var ctx
    let ctx = document.getElementById("chart");
   let dataFirst = {
        data: [
            3000, 4000, 4300, 4000, 4800, 4500, 5200, 5000, 5200, 5100, 6000, 6500,
        ],
        fill: false,
        label: "BTC",
        borderColor: "black",

        pointStyle: "circule",
        pointBorderColor: "rgb(251, 73, 192)",
        backgroundColor: "rgb(251, 73, 192)",
    };

    let datasecond = {
        data: [2700, 3500, 3600, 4000, 3600, 4200, 3800, 4000, 4500, 4200, 5000],

        label: "ETH",
        borderColor: "purple",
        pointStyle: "circule",
        pointBorderColor: "rgb(83, 185, 234)",
        backgroundColor: "rgb(83, 185, 234)",
    };

   let datathird = {
        data: [3000, 3300, 3500, 2800, 3700, 3500, 4000, 4800, 4000, 3800, 2000],
        label: "LTC",
        borderColor: "white",
        pointStyle: "circule",
        pointBorderColor: "rgb(245, 166, 35)",
        backgroundColor: "rgb(245, 166, 35)",
    };

    // to create our chart we need our var ctx and the config
   let ourdata = {
        labels: [
            "10.59PM",
            "11.59PM",
            "12.59PM",
            "1.59PM",
            "2.59PM",
            "3.59PM",
            "4.59PM",
            "5.59PM",
            "6.59PM",
            "7.59PM",
        ],
        datasets: [dataFirst, datasecond, datathird],



    };

</script>
