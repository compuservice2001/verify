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
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<section class="container d-flex justify-content-center align-content-center " style="margin-top: 150px;">
    
    	<form method="post" class="custom-form">
            <div class="headline">
                <h2>Se connecter</h2>
            </div> 
            

            <div class="form-group">
                <label for="E-mail">E-mail:</label>
                <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="Mot de passe">Mot de passe:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
			<div class="container d-flex justify-content-between align-content-center">
			<button type="submit" class="btn btn-danger mt-4 fs-6">Rappeler le mot de passe</button>		
            <button type="submit" class="btn btn-danger mt-4">LOGIN</button>
			</div>

        </form>



		<?php include('footer.php')?>

