<!DOCTYPE html>
<html lang="en">

<?php 
    $base_url = 'http://localhost/CoffeeStoreWeb/public';
 ?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="3;url=<?php echo $base_url ?>">
	<title>Annoucement</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/css/normalize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>/js/semantic.js"></script>
</head>
<body>
	<div class="ui container">
		<div class="ui tertiary inverted red segment">
  			Welcome <?php echo $_SESSION['login_user']; ?>
		</div>
	</div>
</body>
</html>