<!DOCTYPE html>
<html lang="en">

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Member</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/jeffry.in.slider.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/jquery.glide.min.js"></script>
</head>

<body>
    <?php 
      include('header_upload_view.php');
     ?>
    <div class="ui container">
        <form class="ui form" method="post" action="insert_data_member" enctype='multipart/form-data'>
          <div class="field">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
          </div>
          <div class="field">
            <label>Id Name</label>
            <input type="text" name="idname" placeholder="Id Name">
          </div>
          <div class="field">
            <label>About</label>
            <input type="text" name="about" placeholder="About">
          </div>
          <div class="field">
            <label>Facebook</label>
            <input type="text" name="link_fb" placeholder="Link FaceBook">
          </div>
          <div class="field">
            <label>Instagram</label>
            <input type="text" name="link_ins" placeholder="Link Instagram">
          </div>
          <div class="field">
            <label>Twitter</label>
            <input type="text" name="link_tw" placeholder="Link Twitter">
          </div>
          <div class="field">
            <label>Image</label>
            <input type="file" name="image">
          </div>
          <div class="ui right aligned grid">
            <div class="center aligned two column row">
              <div class="column">
                <button class="ui button" type="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
    </div>   
</body>

</html>