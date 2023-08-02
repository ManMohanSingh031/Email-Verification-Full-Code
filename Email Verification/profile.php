<?php

	require "functions.php";
	require "mail.php";
	check_login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="profileverifystyle.css" />
    <title>Profile</title>
  </head>
  <body> 
  <?php include('header.php');?>
	<?php if(check_login(false)):?>
		Hi, <?=$_SESSION['USER']->username?>;

		<br><br>
		<?php if(!check_verified()):?>
			<div class="otp-card"> 
    <button><a href="verify.php">Verifiy Here</a> </button>
    </div>
		<?php endif;?>
	<?php endif;?>
</body>
</html>