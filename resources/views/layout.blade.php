<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- Mayna website-</title>
    <link rel="stylesheet"href="{{asset('css/app.css')}}">
    <link rel="stylesheet"href="{{asset('js/app.js')}}">
</head>

<body>
<div id="container">

    <div class="sidebar">
        <img src="/svg/Logo.svg"  width="30" height="30">
        <div> <strong>Receh</strong>tok</div>
    </div>


    <div class="content">

        <div class="content image">
            <img src="/svg/Dashboard.svg" height="30">
            <div>Dashboard</div>
        </div>

        <div class="content image">
            <img src="/svg/Wallet.svg"height="25" />
            <div>Wallet</div>
        </div>


        <div class="content image">
            <img src="/svg/Message.svg"height="25"/>
            <div>Messages</div>
        </div>

        <div class="content image">
            <img src="/svg/Trade.svg"height="25" >
            <div>Trade</div>

        </div>
        <div class="content image">
            <img src="/svg/Account.svg"height="20" width="20"/>
            <div>Account Settings</div>
        </div>


    </div>

    <div class="footer">
        <img src="/svg/Collapse Icon.svg" >
    </div>
</div>


<div class="chartcontainer">
    <canvas id="chart"></canvas>
</div>

</body>

