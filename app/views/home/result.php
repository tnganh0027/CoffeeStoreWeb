<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
 ?>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/result.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
</head>

<body>
    <div id="nav-header-scroll" class="ui inverted vertical masthead center aligned segment">
        <div class="ui stackable inverted menu">
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
                <div class="ui dividing header">Result</div>
                <div class="ui segment" style="overflow: auto">
                    <div class="ui three stackable cards">
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="../resources/images/background_item_1.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Matt Giampietro</div>
                                <div class="meta">
                                    <a href="infor.html">268 Lý Thường Kiệt Tp.HCM</a>
                                </div>
                                <div class="description">
                                    Matthew is an interior designer living in New York.
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
										<i class="unhide icon"></i>
										75
									</span>

                                <span class="right floated">
										<i class="star icon"></i>
										7.1
									</span>
                            </div>
                        </div>
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
</body>

</html>