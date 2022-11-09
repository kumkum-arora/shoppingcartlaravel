<!DOCTYPE html>
<html>

<head>
    <title>ENEST-5</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        <div class="head-div">
            <div class="main">
                <div class="head">
                    <span>EVEST</span>
                    <p>THE BIGGEST CHOICE OF THE WEB</p>
                </div>
                @if (session()->has('user'))
                <div class="btn">
                    <a href="{{url('logout-user')}}"><input type="button" name="" value="Logout {{Session()->get('uname')}}"></a>
                </div>
                @else
                <div class="btn">
                    <a href="login"><input type="button" name="" value="Login"></a>
                </div>
                @endif
            </div>
        </div>
        <div class="home-page">
            <div class="pagnation">
                <div class="list">
                    <ul>
                        <a href="http://localhost/laraval/evest/public/index">
                            <li>HOME</li>
                        </a>
                        <li>NEW PROJECT</li>
                        <li>SPECIAL</li>
                        <a href="http://localhost/laraval/evest/public/allproducts">
                            <li>ALL PRODUCTS</li>
                        </a>
                        <li>REVIEWS</li>
                        <a href="http://localhost/laraval/evest/public/contactus">
                            <li>CONTACT</li>
                        </a>
                        <a href="http://localhost/laraval/evest/public/checkout">
                            <li>MY CART</li>
                        </a>
                    </ul>
                </div>


                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="search">
                        </div>
                        <div class="btnn">
                            <input type="submit" name="" value="Search">
                        </div>

                    </div>
                </div>
            </div>
        </div>