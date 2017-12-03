<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Explorer</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/infor.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
    
    <?php 
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/',$uri);
        $id_store = end($uri);
     ?>
    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu header-nav">
            <a href="<?= $base_url ?>" class="brand item" style="text-decoration: none;">The Coffee Shop</a>
            <div class="item" style="width: 30%;">
                <div class="ui icon input">
                    <input type="text" placeholder="Search..." id="search_text" autocomplete="off" tabindex="1">
                    <i class="search link icon" id="search-icon"></i>        
                </div>

            <div class="right menu">
                <?php
                    $save = '';
                    if(isset($_SESSION['login_user']))
                    {
                        $save = $_SESSION['login_user'];
                        $name = explode("@",$_SESSION['login_user']);
                        
                ?>
                    <a class="item">Hi, <?= $name[0] ?></a>
                    <a class="item" href="<?= $base_url ?>/home/doLogout"><i class="sign out icon"></i></a>
                <?php
                    }
                    else
                    {
                        $save = '';
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
    <div class="ui middle aligned main container" style="padding-top: 30px; padding-bottom: 30px;">


        <div class="ui centered grid">


            <!--INFORMATION PART-->
            <div class="row" id="inforpart">
                <?php foreach ($data['detail'] as $value): ?>
                <div class="sixteen wide mobile sixteen wide tablet seven wide computer column">
                    <img class="ui fluid image" src="<?= $value['image'] ?>">
                </div>

                <div class="sixteen wide mobile sixteen wide tablet nine wide computer column">

                    <!-- <div class="ui breadcrumb">
                        <a class="section">Home</a>
                        <i class="right angle icon divider"></i>
                        <a class="section">Store</a>
                        <i class="right angle icon divider"></i>
                        <div class="active section">T-Shirt</div>
                    </div> -->

                    <br><br>
                   
                        <div>

                            <h3><?= $value['name'] ?></h3>

                            <div class="ui mini images relaxed devided">
                                <a href="https://www.facebook.com/The.Coffee.House.2014/" class="ui image">
                                    <img src="<?= $base_url ?>/images/fb.png" >
                                </a>

                                <a href="http://www.thecoffeehouse.com" class="ui image">
                                    <img src="<?= $base_url ?>/images/home.ico">
                                </a>

                            </div>
                        </div>



                        <div>
                            <h5> <i class="location arrow icon"></i> Address: <?= $value['address'] ?></h5>
                        </div>

                        <br>

                        <div>
                            <h5> <i class="wait icon"></i> Opening time - Closing time: <?= $value['open'] ?> <a href="">(Opening)</a></h5>

                        </div>

                        <br>

                        <div>
                            <h5> <i class="dollar icon"></i> Average cost/a drink: <?= $value['average_cost'] ?> <span class="price"></span></h5>
                        </div>
                    
                    

                </div>
                <?php endforeach ?>
            
            </div>

            <div class="ui divider"></div>

            <!--THE MENU PART-->
            <div class="row">

                <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">

                </div>
                <br><br>


                <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column ">
                    <h2 class="ui header"> Store's Menu</h2>
                    <div class="ui link four stackable cards">
                        <?php $count = 0; ?>
                        <?php foreach ($data['menu'] as $key => $value): ?>
                            <?php $count++; ?>
                            <div class="card card<?=$count?>"> 
                                <div class="content">
                                    <a class="header"><?= $value['name'] ?></a>
                                    <div class="meta">
                                            price:
                                            <span class="price">
                                                <?= $value['price'] ?>
                                            </span>
                                        </div>
                                </div>
                            </div>
                            <div class="ui popup pop<?=$count?>">
                                <div class="ui green card">
                                    <div class="content">
                                        <div class="header">Recipe</div>

                                        <div class="description">
                                            <p>
                                                <?= $value['recipe'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <i class="check icon"></i>
                                        <?= $data['detail'][0]['name'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        
                    </div>
                </div>

            </div>

            <div class="ui divider"></div>


            <!--THE GALLARY PART-->
            <div class="ui grid row">

                <div class="ui sixteen wide mobile sixteen wide tablet sixteen wide computer column">

                    <h2 class="ui header"> Some images</h2>

                </div>
                <div class="ui centered sixteen wide mobile sixteen wide tablet sixteen wide computer column">

                    <div class="ui grid centered small images gallery cf ">
                        <?php foreach ($data['some_images'] as $value): ?>
                            <div>
                                <img class="ui image" src="<?= $value['FileName'] ?>" />
                            </div>
                        <?php endforeach ?>
                    </div>

                </div>

            </div>

            <div class="ui divider"></div>

            <!--EXTRA INFORMATION-->
            <div class="row">
                <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">
                    <h2 class="ui header">Extra informations</h2>
                    <div class="ui column doubling grid">
                        <div class="column">
                            <?php foreach ($data['detail'] as $value): ?>
                                <p><?= $value['content'] ?></p>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

            </div>


            <div class="ui divider"></div>
            <!--COMMENT PART-->
            <div class="row">
                <div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">
                    <h2 class="ui header">Comments</h2>
                    <div class="ui comments" id="comments">
                        <?php foreach ($data['cmt'] as $value): ?>
                        <div class="comment">
                            <div class="content">
                                <a class="author"><?= $value['user_email'] ?></a>
                                <!-- <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div> -->
                                <div class="text">
                                    <?= $value['content'] ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                       
                    

                        
                    </div>
                    <form class="ui reply form">
                            <div class="field">
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                            </div>
                            <button type="button" class="ui blue labeled submit icon button" id="btn_cmt" name="btn_cmt">
                                <i class="icon edit"></i> Add Reply
                            </button>
                    </form>
                </div>

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
        var base_url = 'http://localhost/CoffeeStoreWeb/public';
        $(document).ready(function(){
            $('#search_text').keyup(function(){
                var txt = $(this).val();
                 $('#result').html('');
                if(txt != '' && txt.length > 3)
                {
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
                        $('#result').html(data);
                    });  
                }
                else
                {                   
                }
            });
        });

    </script>

    <script>
         var email = '<?= $save ?>'; //fixed if can
         var idstore = '<?= $id_store ?>';
         var base_url = 'http://localhost/CoffeeStoreWeb/public';
         $(document).ready(function(){
            $("#btn_cmt").click(function(event) {
                /* Act on the event */
                if(email == '')
                {
                    alert('You should login to comment !');
                }
                else {
                    CKEDITOR.config.entities_latin = false;
                    var text = CKEDITOR.instances.content.getData();
                    $.ajax({
                        url: base_url + '/home/doComment',
                        type: 'post',
                        dataType: 'json',
                        data: {user_email: email,
                                content: text,
                                store: parseInt(idstore)},
                    })
                    .done(function() {
                        //console.log("success");
                    })
                    .fail(function() {
                        //console.log("error");
                    })
                    .always(function(res) {
                        console.log("complete");
                        var add = '<div class="comment">';
                        add += '<div class="content">';
                        add += '<a class="author">'+email+'</a>';
                        add += '<div class="text">'+text+'</div>';
                        add += '</div></div>';
                        $('#comments').append(add);
                    });
                }
            });
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/infor.js"></script>

</body>

</html>