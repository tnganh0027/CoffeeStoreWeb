<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
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
</head>

<body>

    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu header-nav">
            <a href="<?= $base_url ?>" class="brand item" style="text-decoration: none;">The Coffee Shop</a>
            <div class="ui search item" style="width: 30%;">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Search..." id="search_text" autocomplete="off">
                    <i class="search link icon" id="search-icon"></i>
                </div>
                <div class="results"></div>
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
                        
                        <div class="comment">
                            <a class="avatar">
                                <img src="../resources/images/ava1.jpg">
                            </a>
                            <div class="content">
                                <a class="author"></a>
                                <div class="metadata">
                                    <span class="date">Today at 5:42PM</span>
                                </div>
                                <div class="text">
                                    verry good
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <a class="avatar">
                                <img src="../resources/images/elliot.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Elliot Fu</a>
                                <div class="metadata">
                                    <span class="date">Yesterday at 12:30AM</span>
                                </div>
                                <div class="text">
                                    <p>This has been very useful for my research. Thanks as well!</p>
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="../resources/images/jenny.jpg">
                                    </a>
                                    <div class="content">
                                        <a class="author">Jenny Hess</a>
                                        <div class="metadata">
                                            <span class="date">Just now</span>
                                        </div>
                                        <div class="text">
                                            Elliot you are always so right :)
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <a class="avatar">
                                <img src="../resources/images/joe.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Joe Henderson</a>
                                <div class="metadata">
                                    <span class="date">5 days ago</span>
                                </div>
                                <div class="text">
                                    Dude, this is awesome. Thanks so much
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <a class="avatar">
                                <img src="../resources/images/ava1.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Joe Henderson</a>
                                <div class="metadata">
                                    <span class="date">5 days ago</span>
                                </div>
                                <div class="text">
                                    Dude, this is awesome. Thanks so much
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <a class="avatar">
                                <img src="../resources/images/joe.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Joe Henderson</a>
                                <div class="metadata">
                                    <span class="date">5 days ago</span>
                                </div>
                                <div class="text">
                                    Dude, this is awesome. Thanks so much
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>

                        <form class="ui reply form">
                            <div class="field">
                                <textarea></textarea>
                            </div>
                            <div class="ui blue labeled submit icon button">
                                <i class="icon edit"></i> Add Reply
                            </div>
                        </form>
                    </div>
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
        $(document).ready(function(){
             $.ajax({
                crossOrigin: true,
                method:'post',
                url: 'https://www.foody.vn/ho-chi-minh/tra-sua-gong-cha',
                success: function(data) {
                    console.log(data);
                    }
                });
            });
    </script>

    <script>
        var base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/infor.js"></script>

</body>

</html>