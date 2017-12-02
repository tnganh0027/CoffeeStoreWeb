<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <style>
	    body > .grid {
	      height: 100%;
	    }
	    .image {
	      margin-top: -100px;
	    }
	    .column {
	      max-width: 450px;
	    }
    </style>
</head>
<body>
	<div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu header-nav">
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

	<div class="ui middle aligned center aligned grid">
	  <div class="column">
	    <h2 class="ui image header">
	      <div class="content">
	        Log-in to your account
	      </div>
	    </h2>
	    <form action="https://s.codepen.io/voltron2112/debug/PqrEPM?" method="get" class="ui large form">
	      <div class="ui stacked secondary  segment">
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="user icon"></i>
	            <input type="text" name="email" placeholder="E-mail address">
	          </div>
	        </div>
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="lock icon"></i>
	            <input type="password" name="password" placeholder="Password">
	          </div>
	        </div>
	        <div class="ui fluid large submit inverted blue button">Login</div>
	      </div>

	      <div class="ui error message"></div>

	    </form>

	    <div class="ui message">
	      New to us? <a href="https://s.codepen.io/voltron2112/debug/PqrEPM?">Register</a>
	    </div>
	  </div>
	</div>
</body>
	<script>
		$(document)
		    .ready(function() {
		      $('.ui.form')
		        .form({
		          fields: {
		            email: {
		              identifier  : 'email',
		              rules: [
		                {
		                  type   : 'empty',
		                  prompt : 'Please enter your e-mail'
		                },
		                {
		                  type   : 'email',
		                  prompt : 'Please enter a valid e-mail'
		                }
		              ]
		            },
		            password: {
		              identifier  : 'password',
		              rules: [
		                {
		                  type   : 'empty',
		                  prompt : 'Please enter your password'
		                },
		                {
		                  type   : 'length[6]',
		                  prompt : 'Your password must be at least 6 characters'
		                }
		              ]
		            }
		          }
		        })
		      ;
		    })
		  ;
	</script>
</html>