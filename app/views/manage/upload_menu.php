<!DOCTYPE html>
<html lang="en">

<?php 
    $base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
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
    <script src="http://localhost:8888/CoffeeStoreWeb/ckeditor/ckeditor.js"></script>
    <script src="http://localhost:8888/CoffeeStoreWeb/ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
   <?php 
      include('header_upload_view.php');
     ?>
    <div class="ui container">
        <form class="ui form">
          <div class="field">
            <label>Name Store</label>
            <input type="text" name="name" value="<?= $data[0]['name'] ?>" id="name_store" disabled>
          </div>
          <div class="field">
            <label>Address</label>
            <input type="text" name="address" value="<?= $data[0]['address'] ?>" disabled>
          </div>
          <div class="field">
            <label>Menu</label>
            <input type="text" name="menu" placeholder="Name" id="name">
          </div>
          <div class="field">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" id="price">
          </div>
          <div class="field">
            <label>Recipe</label>
            <textarea name="recipe" id="recipe" cols="30" rows="10"></textarea>
          </div>
          <div class="ui right aligned grid">
            <div class="center aligned two column row">
              <div class="column" id="add_content">
                <button class="ui button" type="button" id="btn_submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
    </div>   
  <script>
    CKEDITOR.replace( 'recipe', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl:  '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    });
  </script>
  <script>
    var base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
    $(document).ready(function(){
      var text = $('#recipe').text();
      $('#btn_submit').click(function(event) {
        /* Act on the event */
        CKEDITOR.config.entities_latin = false;
        var text = CKEDITOR.instances.recipe.getData();
        $.ajax({
          url: base_url + '/upload/doAdd',
          type: 'POST',
          dataType: 'json',
          data: {name: $('#name').val(),
                price: $('#price').val(),
                name_store: $('#name_store').val(),
                recipe: text,},
        })
        .done(function() {
          //console.log("success");
        })
        .fail(function() {
          //console.log("error");
        })
        .always(function(res) {
          console.log("complete");
          console.log(res);
          alert("Insert Done !");
        });
        
      });
    });
  </script>
</body>

</html>