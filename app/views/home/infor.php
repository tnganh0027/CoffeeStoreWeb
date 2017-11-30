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

                        <div class="card card1">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Frothy Hot Chocolate</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <div class="ui popup pop1">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card2">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Peppermint Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop2">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>6 tablespoons coffee/espresso</p>
                                        <p>8 ounces water</p>
                                        <p>13 ounces milk</p>
                                        <p>10 to 18 round candies</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card3">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Amaretto Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop3">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>6 tablespoons coffee/espresso</p>
                                        <p>8 ounces water</p>
                                        <p>Ingredients in pitcher</p>
                                        <p>13 ounces milk</p>
                                        <p>3 tablespoons sugar</p>
                                        <p>2 tablespoons Amaretto</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card4">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop4">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card5">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop5">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card6">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop6">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>


                        <div class="card card7">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                    price:
                                    <span class="price">
                                        30.000 VNĐ
                                    </span>
                                </div>

                            </div>

                        </div>
                        <div class="ui popup pop7">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



                        <div class="card card8">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop8">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



                        <div class="card card9">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop9">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



                        <div class="card card10">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop10">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



                        <div class="card card11">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop11">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



                        <div class="card card12">
                            <div class="image">
                                <img src="../resources/images/item-coffee1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Latte</a>
                                <div class="meta">
                                        price:
                                        <span class="price">
                                            30.000 VNĐ
                                        </span>
                                    </div>

                            </div>

                        </div>
                        <div class="ui popup pop12">
                            <div class="ui green card">
                                <div class="content">
                                    <div class="header">Recipe</div>

                                    <div class="description">
                                        <p>13 ounces milk</p>
                                        <p>1/3 cup semi-sweet chocolate chips, melted</p>
                                        <p>2 teaspoons sugar</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <i class="check icon"></i> 121 liked
                                </div>

                            </div>
                        </div>



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
                    <div class="ui comments">
                        <h2 class="ui header">Comments</h2>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/infor.js"></script>

</body>

</html>