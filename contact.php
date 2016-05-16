<?php

require_once 'inc/config.php';



$pageSite = 'contact';
include_once 'inc/header.php';
?>

<h1 class="text-center">Contact<br><small>Une question ?</small></h1>

<form method="POST" id="formContact">

	<div class="row">

		<div class="col-md-6">
			<div class="input-group">
				<label for="firstname" class="input-group-addon">Prénom</label>
				<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Entrez votre prénom.." value="">
			</div>
		</div>

		<div class="col-md-6">
			<div class="input-group">
				<label for="lastname" class="input-group-addon">Nom</label>
				<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Entrez votre nom..." value="">
			</div>
		</div>

	</div>

	<div class="input-group">
		<label for="email" class="input-group-addon">Email</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre adresse e-mail..." value="">
	</div>

	<div class="input-group">
		<label for="formContent" class="input-group-addon">Message</label>
		<textarea name="content" id="formContent" class="form-control" placeholder="Laissez votre message..."></textarea>
	</div>

	<div class="input-group">
		<input type="submit"  class="btn btn-success" value="Valider mon formulaire"></input>
		<input type="reset" class="btn btn-danger"  value="Vider mon formulaire"></input>
	</div>

</form>

<?php include_once 'inc/footer.php'; ?>