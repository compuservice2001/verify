<?php

	require "functions.php";
	check_login();
?>

	<?php include('header.php');?>
 


 

	
	<section class="container d-flex justify-content-center align-content-center " style="margin-top: 150px;">
    	<div class="custom-form">
		<?php if(check_login(false)):?>
            <div class="headline">
                <h2>Hi, <?=$_SESSION['USER']->username?>;</h2>
            </div> 
            <?php if(!check_verified()):?>
				<p>Es necesario verificar tu correo...</p>

			<a href="verify.php">
			<button type="submit" class="btn btn-danger mt-4">Verify Profile</button>
			</a>
			</div>	
	</section>	
		<?php endif;?>
	<?php endif;?>	

            

<?php include('footer.php')?>