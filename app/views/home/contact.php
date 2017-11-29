<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/contact.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu">
            <a href="<?= $base_url ?>" class="brand item" style="text-decoration: none;">The Coffee Shop</a>
            <div class="item" style="width: 30%;">
                <div class="ui icon input">
                    <input type="text" placeholder="Search..." id="search-bar">
                    <i class="search link icon" id="search-icon"></i>
                </div>
            </div>

            <div class="right menu">
                <a class="item" href="<?= $base_url ?>">Home</a>
                <a class="item" href="<?= $base_url ?>/home/explore">Explore</a>
                <a class="item" href="<?= $base_url ?>/home/about">About</a>
                <a class="item" href="<?= $base_url ?>/home/contact">Contact</a>
                <span class="item delete-item"></span>
            </div>
        </div>
    </div>
    <div class="ui middle aligned main container" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="ui segment">
            <h1 class="ui dividing header">Write us</h1>
            <p>Please feel free to contact us by filling the form below. We will be in touch shortly.</p>
            <div class="ui divider"></div>
           
            <form class="ui form" method="post" action="<?= $base_url ?>/Send_mail/doSend">
                <div class="required field">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div class="ui divider"></div>
                <div class="required field">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="ui divider"></div>
                <div class="required field">
                    <label>Content</label>
                    <textarea name="content"></textarea>
                </div>
           
            <div class="ui divider"></div>
            <button  type="submit" class="ui black button">Send</button>
            <div class="ui divider"></div>
            </form>
        </div>
    </div>
    <div class="ui inverted vertical footer segment">
        <div class="ui center align container">
            <div class="ui inverted section divider"></div>
            <div class="ui stackable inverted divided grid">
                <div class="eight wide column">
                    <div class="ui compact labeled icon inverted icon massive link list">
                        <a class="item"><i class="twitter icon"></i> Twitter</a>
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
        $('#search-icon').click(function(e) {
            e.preventDefault();
            if ($('#search-bar').val() === '') {
                //do something
            } else {
                var url = 'result.html';
                window.open(url, '_self');
            }
        });
    </script>
    <script>
    CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl:  '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    });
    </script>
</body>

</html>