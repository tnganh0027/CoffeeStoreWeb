<!DOCTYPE html>
<html>

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/about.css">
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
        <div class="ui divider"></div>
        <h4 class="ui dividing header">Welcome</h4>
        <p>This is a website about all of the Ho Chi Minh City Coffee Shop. You can find all the detail information about some members here.</p>
        <div class="ui divider"></div>
        <div class="ui segment">
            <!--
            <table class="ui very basic collapsing celled table">
                <thead>
                    <tr>
                        <th>Member</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Describe</th>
                        <th>Role</th>
                        <th>More details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4 class="ui image header">
                                <img src="../resources/images/mem_1.jpg" class="ui centered avatar mini rounded image">
                                <div class="content">
                                    Binh Nguyen
                                    <div class="sub header">Habbangie &hearts;
                                    </div>
                                </div>
                            </h4>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                            Male
                        </td>
                        <td>
                            Mask Of Madness.
                        </td>
                        <td>
                            Team Leader / Support all members.
                        </td>
                        <td>
                            기억하나요 우리 함께 했던 시간 L.O.V.E LUV.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="ui image header">
                                <img src="../resources/images/mem_2.jpg" class="ui centered avatar mini rounded image">
                                <div class="content">
                                    Phuong Do
                                    <div class="sub header">Mamarong &hearts;
                                    </div>
                                </div>
                            </h4>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                            Male
                        </td>
                        <td>
                            Aghanim's scepter.
                        </td>
                        <td>
                            Mid Player / Take mid easy.
                        </td>
                        <td>
                            너와 나 지금부터 잠시 12345. 눈을 감고 가만히 서 12345.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="ui image header">
                                <img src="../resources/images/mem_3.jpg" class="ui centered avatar mini rounded image">
                                <div class="content">
                                    Anh Truong
                                    <div class="sub header">Na Hyomin &hearts;
                                    </div>
                                </div>
                            </h4>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                            Male
                        </td>
                        <td>
                            Divine Rapier.
                        </td>
                        <td>
                            Nothing to say / EnternalEnvy mood.
                        </td>
                        <td>
                            내 몸맨 nice nice body 잘빠진 다리 쌔끈한 허리.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="ui image header">
                                <img src="../resources/images/mem_4.jpg" class="ui centered avatar mini rounded image">
                                <div class="content">
                                    Tri Le
                                    <div class="sub header">Elsie Ej &hearts;
                                    </div>
                                </div>
                            </h4>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                            Male
                        </td>
                        <td>
                            Blink Dagger.
                        </td>
                        <td>
                            Carry safe lane / Resolut1on mood.
                        </td>
                        <td>
                            How are you 내 사랑 잃어버린 조각 보고 싶어 울다 지칠 때 난.
                        </td>
                    </tr>
                </tbody>
            </table>
            -->
            <div class="ui four column doubling stackable grid container">
                <div class="column">
                    <div class="ui fluid card team-member">
                        <figure>
                            <img src="../resources/images/mem_1.jpg" alt="member_1" class="ui mini rounded image">
                            <figcaption>
                                <p>기억하나요 우리 함께 했던 시간 L.O.V.E LUV.</p>
                                <ul>
                                    <li><a href=""><i class="facebook f icon"></i></a></li>
                                    <li><a href=""><i class="instagram icon"></i></a></li>
                                    <li><a href=""><i class="mail outline icon"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <h4>Binh Nguyen Khanh</h4>
                        <p>Habbangie &hearts;</p>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card team-member">
                        <figure>
                            <img src="../resources/images/mem_2.jpg" alt="member_2" class="ui mini rounded image">
                            <figcaption>
                                <p>너와 나 지금부터 잠시 12345. 눈을 감고 가만히 서 12345.</p>
                                <ul>
                                    <li><a href=""><i class="facebook f icon"></i></a></li>
                                    <li><a href=""><i class="instagram icon"></i></a></li>
                                    <li><a href=""><i class="mail outline icon"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <h4>Phuong Do Hoang Minh</h4>
                        <p>Mamarong &hearts;</p>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card team-member">
                        <figure>
                            <img src="../resources/images/mem_3.jpg" alt="member_3" class="ui mini rounded image">
                            <figcaption>
                                <p>내 몸맨 nice nice body 잘빠진 다리 쌔끈한 허리.</p>
                                <ul>
                                    <li><a href=""><i class="facebook f icon"></i></a></li>
                                    <li><a href=""><i class="instagram icon"></i></a></li>
                                    <li><a href=""><i class="mail outline icon"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <h4>Anh Truong Ngoc</h4>
                        <p>Hyomin &hearts;</p>
                    </div>
                </div>
                <div class="column">
                    <div class="ui fluid card team-member">
                        <figure>
                            <img src="../resources/images/mem_4.jpg" alt="member_4" class="ui mini rounded image">
                            <figcaption>
                                <p>How are you 내 사랑 잃어버린 조각 보고 싶어 울다 지칠 때 난.</p>
                                <ul>
                                    <li><a href=""><i class="facebook f icon"></i></a></li>
                                    <li><a href=""><i class="instagram icon"></i></a></li>
                                    <li><a href=""><i class="mail outline icon"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <h4>Tri Le Nguyen Minh</h4>
                        <p>Elsie Ej &hearts;</p>
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