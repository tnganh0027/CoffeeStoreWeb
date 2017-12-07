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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
</head>
<body>
    <?php 
      include('header_upload_view.php');
     ?>
    <div class="ui middle aligned main container" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="ui centered grid">
            <div class="sixteen wide mobile sixteen wide tablet fourteen wide computer column">
                <div class="ui dividing header">Explorer</div>
                <div class="ui segment" style="overflow: auto">
                    <div class="ui three stackable cards">
                        <?php foreach ($data['store'] as $value): ?>
                            <div class="card">
                                <div class="image">
                                    <img src="<?= $value['image'] ?>">
                                </div> 
                                <div class="content">
                                    <div class="header"><a style="color:blue !important" href="<?= $base_url ?>/upload/addMenu/<?= $value['id'] ?>"><?= $value['name'] ?></a></div>
                                    <div class="meta">
                                        <?= $value['address'] ?>
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
                                            <i class="heart icon"></i>
                                            <?= $value['star'] ?>
                                        </span>
                                </div>
                                <button class="negative ui button">Delete</button>
                            </div>
                        <?php endforeach ?>  
                    </div>
                    <div class="ui divider"></div>
                    <div class="ui pagination menu">
                        <?php 
                            $uri = $_SERVER['REQUEST_URI'];
                            $uri = explode('/',$uri);
                            $current_page = end($uri);
                            if($current_page == 'viewStore')
                                $current_page = 0;
                            $current_page = $current_page - 1;
                            for ($i = 0; $i < $data['page'] ; $i++) {
                                ?>
                                <?php 
                                    if($i == $current_page)
                                    {
                                 ?>
                                    <a class="item" href="<?= $base_url ?>/upload/page/<?= $i + 1 ?>">
                                        <?= $i+1 ?>
                                    </a>
                                <?php 
                                    }
                                    else {
                                        ?>
                                    <a class="active item" href="<?= $base_url ?>/upload/page/<?= $i + 1 ?>">
                                        <?= $i+1 ?>
                                    </a>
                                <?php
                                    }
                                  ?>
                                    
                                <?php
                            }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>