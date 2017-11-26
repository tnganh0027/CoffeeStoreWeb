<!DOCTYPE html>
<html lang="en">

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Coffee Shop</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/jeffry.in.slider.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/index.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/jquery.glide.min.js"></script>
</head>

<body>
    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu header-nav">
            <a href="index.html" class="brand item" style="text-decoration: none;">The Coffee Shop</a>
            <div class="item" style="width: 30%;">
                <div class="ui icon input">
                    <input type="text" placeholder="Search..." id="search-bar">
                    <i class="search link icon" id="search-icon"></i>
                </div>
            </div>

            <div class="right menu">
                <a class="item" href="index.html">Home</a>
                <a class="item" href="explorer.html">Explore</a>
                <a class="item" href="about.html">About</a>
                <a class="item" href="contact.html">Contact</a>
                <span class="item delete-item"></span>
            </div>
        </div>
    </div>
    <div class="slider slider1">
        <div class="slides">
            <div class="slide-item item1">
            </div>
            <div class="slide-item item2">
            </div>
            <div class="slide-item item3">
            </div>
        </div>
    </div>
    <div class="ui inverted vertical footer segment">
        <div class="ui center align container">
            <div class="ui inverted section divider"></div>
            <div class="ui stackable inverted divided grid">
                <div class="eight wide column">
                    <div class="ui compact labeled icon inverted icon massive link list">
                        <a class="item"><i class="twitter icon"></i> Tweet</a>
                        <a class="item"><i class="facebook icon"></i> Facebook</a>
                        <a class="item"><i class="mail icon"></i> E-mail</a>
                    </div>
                </div>
                <div class="eight wide column">
                    <h4 class="ui inverted header">Group 3</h4>
                    <div class="ui inverted list">
                        <a href="#" class="item">Nguyen Khanh Binh</a>
                        <a href="#" class="item">Truong Ngoc Anh</a>
                        <a href="#" class="item">Le Nguyen Minh Tri</a>
                        <a href="#" class="item">Do Hoang Minh Phuong</a>
                    </div>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <h4 class="ui inverted header" style="text-align: center;">The Coffee Shop &copy;2017 - ALL RIGHTS RESERVED.</h4>
        </div>
    </div>
    <script>
        $('.slider').glide({
            autoplay: 6000,
            hoverpause: true,
            animationDuration: 500,
            arrowsWrapperClass: 'slider-arrows',
            arrowRightText: '',
            arrowLeftText: ''
        });

        $('#search-icon').click(function(e) {
            e.preventDefault();
            if ($('#search-bar').val() === '') {
                //do something
            } else {
                var url = 'result.html';
                window.open(url, '_self');
            }
        });

        $(function() {
            $(window).on("load resize", function() {
                $(".slide-item").css("height", window.innerHeight);
            });
        });
    </script>
</body>

</html>