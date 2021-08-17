    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- Mayna website-</title>
    <link rel="stylesheet"href="{{asset('css/app.css')}}">
    <link rel="stylesheet"href="{{asset('js/app.js')}}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
@extends('layout')

<div id="container">

<div class="title">
    <div class="item2">
        With all the styling tool options available in today's Market</div>
    <div class="title2">
        Wallets </div>
    <div class="icon">
                <span class="icon item3">
                    <div class="item1" > Dashboard  </div>
                    <img src="./svg/Magnifier icn.svg " >

                </span>
        <span class="icon item4">
                    <img src="./svg/Menu icn.svg">
                </span>

        <span class="icon item5">
                    <img src="./svg/Notif Badge.svg" height="28.21" width="100">

                </span>

        <div class="icon item6">
            <img src="/svg/Group 42.svg">
        </div>
    </div>

    <div class="wallet">
        <div class="wallet1">
            <img src="/svg/Btc.svg" alt="btc image">
        </div>
        <div class="wallet2">
            <img src="/svg/Eth.svg" alt="">
        </div>
        <div class="wallet3">
            <img src="./svg/Ltc.svg" alt="">
        </div>

        <div class="wallet4">
            <img src="/svg/+ Add Currency.svg" alt="">
        </div>

    </div>
</div>
</div>
</body>


</html>
