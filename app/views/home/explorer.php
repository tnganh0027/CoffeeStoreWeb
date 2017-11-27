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
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/explore.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
</head>

<body>
    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu">
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
    <div class="ui middle aligned main container" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="ui centered grid">
            <div class="sixteen wide mobile sixteen wide tablet two wide computer column">
                <div class="ui vertical text menu">
                    <div class="header item">Sort By</div>
                    <a class="item">
							Most Popular
						</a>
                    <a class="item">
							Most Comments
						</a>
                </div>
            </div>
            <div class="sixteen wide mobile sixteen wide tablet fourteen wide computer column">
                <div class="ui dividing header">Explorer</div>
                <div class="ui segment" style="overflow: auto">
                    <div class="ui three stackable cards">
                        <?php foreach ($data as $value): ?>
                            <div class="card">
                                <!-- <div class="image">
                                    <img src="../resources/images/background_item_1.jpg">
                                </div> -->
                                <div class="content">
                                    <div class="header"><?= $value['name'] ?></div>
                                    <div class="meta">
                                        <a href="infor.html"><?= $value['address'] ?></a>
                                    </div>
                                    <div class="description">
                                        <?= $value['about'] ?>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <span class="left floated">
                                            <i class="unhide icon"></i>
                                            <?= $value['view'] ?>
                                        </span>

                                    <span class="right floated">
                                            <i class="star icon"></i>
                                            <?= $value['star'] ?>
                                        </span>
                                </div>
                            </div>
                        <?php endforeach ?>  
                    </div>
                    <div class="ui divider"></div>
                    <div class="ui pagination menu">
                        <a class="active item">
								1
							</a>
                        <div class="disabled item">
                            ...
                        </div>
                        <a class="item">
								10
							</a>
                        <a class="item">
								11
							</a>
                        <a class="item">
								12
							</a>
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
</body>

</html>