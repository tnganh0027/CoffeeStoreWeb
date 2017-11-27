<!DOCTYPE html>
<html lang="en">

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/jeffry.in.slider.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/jquery.glide.min.js"></script>
</head>

<body>
    <div class="ui container">
        <form class="ui form" method="post" action="upload/insert_data" enctype='multipart/form-data'>
          <div class="field">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
          </div>
          <div class="field">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
          </div>
          <div class="field">
            <label>About</label>
            <input type="text" name="about" placeholder="About">
          </div>
          <div class="field">
            <label>View</label>
            <input type="number" name="view" placeholder="View">
          </div>
          <div class="field">
            <label>Star</label>
            <input type="number" name="star" placeholder="Star">
          </div>
          <div class="field">
            <label>Image</label>
            <input type="file" name="image">
          </div>
          <button class="ui button" type="submit">Submit</button>
        </form>
    </div>   
</body>

</html>