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
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/CoffeeStoreWeb/ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
    <?php 
      include('header_upload_view.php');
     ?>
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
            <label>Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
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
            <label>Description Image</label>
            <input type="file" name="image">
          </div>
          <div class="field">
            <label>Some Images</label>
            <input type="file" name="files[]" multiple="multiple">
            <p class="ui red message">NOTE: Please, Select the only images (.jpg, .jpeg, .png, .gif) to upload with the size of 100KB only.</p>
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
</body>

</html>