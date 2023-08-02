<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loginstyle.css" />
    <title>login</title>
  </head>
  <body>
<?php  
require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>
	<?php include('header.php')?>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
    <section>
      <img src="bg.png" alt="background" class="bg" />
      <div class="login">
        <h2>login</h2>
        <form method="post">
        <div class="inputBox">
          <input type="email" name="email" id="email"placeholder="Email"/>
        </div>
        <br>
        <div class="inputBox">
          <input type="password" name="password" id="password" placeholder="Password"/>
        </div>
        <br>
        <div class="inputBox">
          <input type="submit" value="Login" id="btn" />
        </div>
        <br>
        <div class="group">
          <a href="http://#">Forget Password ?</a>
          <a href="http://#">Signup</a>
        </form>
        </div>
      </div>
    </section>
  </body>
</html>
	