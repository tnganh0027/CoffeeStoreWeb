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
        <div class="ui stackable inverted menu">
            <a href="<?= $base_url ?>" class="brand item" style="text-decoration: none;">The Coffee Shop</a>
                <div class="ui search item">
                    <div class="ui icon input">
                        <form action="<?= $base_url ?>/home/doResult"" method="get">
                            <input type="text" name="search_text" placeholder="Search..." id="search_text" autocomplete="off" tabindex="1">
                            <button type="submit" class="ui secondary basic button" name="submit">
                                <a><i class="search link icon" id="search-icon"></i>Search<a>
                            </button>
                        </form>       
                    </div>
                    <!-- <div class="results" id="result"></div> -->
                </div>
                
            <div class="right menu">
                <?php 
                    if(isset($_SESSION['login_user']))
                    {
                        $name = explode("@",$_SESSION['login_user'])
                ?>
                    <a class="item">Hi, <?= $name[0] ?></a>
                    <a class="item" href="<?= $base_url ?>/home/doLogout"><i class="sign out icon"></i></a>
                <?php
                    }
                    else
                    {
                ?>
                    <a class="item" href="<?= $base_url ?>/home/login">Login</i></a>
                <?php
                    }
                ?>
                <a class="item" href="<?= $base_url ?>/home/explore">Explore</a>
                <a class="item" href="<?= $base_url ?>/home/about">About</a>
                <a class="item" href="<?= $base_url ?>/home/contact">Contact</a>
                <span class="item delete-item"></span>
            </div>
        </div>
    </div>
	<div id="update"></div>
	<div class="ui middle aligned center aligned grid" id="signup">
	  <div class="column">
	    <h2 class="ui image header">
	      <div class="content">
	        Sign-up your account
	      </div>
	    </h2>
	    <form  class="ui large form" method="post">
	      <div class="ui stacked secondary  segment">
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="user icon"></i>
	            <input type="text" name="sign_email" id="sign_email" placeholder="E-mail address">
	          </div>
	        </div>
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="lock icon"></i>
	            <input type="password" name="sign_password" id="sign_password" placeholder="Password">
	          </div>
	        </div>
	        <button type="button" class="ui fluid large submit inverted blue button" id="btn_signup">Sign-up</button>
	      </div>

	      <div class="ui error message"></div>

	    </form>

	    <div class="ui message">
	      Back to <a id="drc_login">login</a> ?
	    </div>
	  </div>
	</div>

    <div class="ui middle aligned center aligned grid" id="login">
      <div class="column">
        <h2 class="ui image header">
          <div class="content">
            Log-in to your account
          </div>
        </h2>
        <form action="doLogin" method="post" class="ui large form">
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
            <button type="submit" class="ui fluid large submit inverted blue button">Login</button>
          </div>

          <div class="ui error message"></div>

        </form>

        <div class="ui message">
          New to us? <a id="drc_signup">Register</a>
        </div>
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
                        <a class="item">Nguyen Khanh Binh</a>
                        <a class="item">Truong Ngoc Anh</a>
                        <a  class="item">Le Nguyen Minh Tri</a>
                        <a  class="item">Do Hoang Minh Phuong</a>
                    </div>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <h4 class="ui inverted header" style="text-align: center;">The Coffee Shop &copy;2017 - ALL RIGHTS RESERVED.</h4>
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
	 <script>
        var base_url = 'http://localhost/CoffeeStoreWeb/public';
        $(document).ready(function(){
            
            $('#update').html('');
            var timeout = null;
            $('#search_text').keyup(function(){
                var txt = $(this).val();
                if(txt != '' && txt.length > 3)
                {
                    clearTimeout(timeout);
                    timeout = setTimeout(function (){
                    $.ajax({
                        url: base_url+'/home/doSearch',
                        type: 'POST',
                        dataType: 'text',
                        data: {search: txt},
                    })
                    .done(function() {
                        //$('#result').html(data);
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function(data) {
                        console.log("complete");
                        $('#update').html(data);
                    });
                    },1000);
                }
                else
                {
                	$('#update').html('');                   
                }
            });
        });
    </script>

    <script>
        var base_url = 'http://localhost/CoffeeStoreWeb/public';
        var password = $('#sign_password').val();
        $(document).ready(function(){
            $('#btn_signup').click(function(event) {
                /* Act on the event */
                $.ajax({
                    url: base_url + '/home/doSignup',
                    type: 'POST',
                    dataType: 'json',
                    data: {user_email: $('#sign_email').val(),
                            user_pass: $('#sign_password').val(), },
                })
                .done(function() {
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function(res) {
                    alert("Register done. You can login with your account !")
                    console.log("complete");
                });
                
            });
        });
    </script>

    <script>
        $('#signup').fadeOut('fast');
        $(document).ready(function(){
            $('#drc_signup').click(function(event) {
                /* Act on the event */
                $('#login').fadeToggle('fast');
                $('#signup').fadeToggle('fast');
            });
            $('#drc_login').click(function(event) {
                /* Act on the event */
                $('#login').fadeToggle('fast');
                $('#signup').fadeToggle('fast');
            });
        });
    </script>
</html>