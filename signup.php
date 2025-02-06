
<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
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
                <h2>Inscription d'escorte</h2>
            </div> 
            <div class="form-group">
                <label for="Nom du modèle">Nom du modèle:</label>
                <input type="text" name="username" class="form-control" id="Nom du modèle" placeholder="Nom du modèle">
            </div>
			<div class="form-group">
                <label for="E-mail">E-mail:</label>
                <input type="email" name="email" class="form-control" id="E-mail" placeholder="E-mail">
            </div>		
            <div class="form-group">
                <label for="Mot de passe">Mot de passe:</label>
                <input type="password" name="password" class="form-control" id="Mot de passe" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="Répéter le mot de passe">Répéter le mot de passe:</label>
                <input type="password" name="password2" class="form-control" id="Répéter le mot de passe" placeholder="Répéter le mot de passe">
            </div>

            
            <!-- <div class="form-group">
                <label for="Répéter l'adresse email">Répéter l'adresse email:   </label>
                <input type="email" class="form-control" id="Répéter l'adresse email" placeholder="Répéter l'adresse email">
            </div> -->

            <button type="submit" class="btn btn-danger mt-4">Compléter la régistration</button>

        </form>


		</section>			


	</div>
	<?php include('footer.php')?>