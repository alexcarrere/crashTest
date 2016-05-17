$(function(){

	var error = 0;
	var errorEmpty = 0;
	var txtError = [];
	var msgError = '';
	var formValid = false;
  	var pattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

	$('#formContact').ready(function(){
		console.log('formulaire chargé');

      	verifForm();

		$('input').focusout(function() {
			verifForm();
		});

		$('input[type="reset"]').click(function (e) {
			border_default($('input'));
			$('.alert').remove();
		});

		$('#formContact').submit(function (e) {
			e.preventDefault();
			verifForm();

			if (error > 0) {
				$('.alert-warning').remove();
				$('#formContact').before('<div class="alert alert-warning" role="alert">Il reste des erreurs dans le formulaire</div>');
			} 
			else if (errorEmpty != 0) {
				$('.alert-warning').remove();
				$('#formContact').before('<div class="alert alert-warning" role="alert">Tous les champs sont obligatoires</div>');
			}
			else if (formValid == true){
				console.log('formulaire envoyé');
			}
		});


	});


	/* Fonctions */
	function border_error(e) {
		e.css('border-color', 'red');
	}

	function border_success(e) {
		e.css('border-color', 'green');
	}

	function border_default(e) {
		e.css('border-color', '#ccc');
	}

	function verifForm() {
		error = 0;
		errorEmpty = 0;
		txtError = [];
		$('.alert').remove();

		if($('#firstname').val() == ''){
      		errorEmpty = 1;
      		border_default($('#firstname'));
      	}
      	else if($('#firstname').val().length < 3 || $('#firstname').val().length > 15) {
      		error++;
      		border_error($('#firstname'));
      		txtError.push('Le prénom doit contenir entre 3 et 15 caractères');
      	} 
      	else {
      		border_success($('#firstname'));
      	}

      	if($('#lastname').val() == ''){
      		errorEmpty = 1;
      		border_default($('#lastname'));
      	}

      	else if($('#lastname').val().length < 3 || $('#lastname').val().length > 15) {
      		error++;
      		border_error($('#lastname'));
      		txtError.push('Le nom doit contenir entre 3 et 15 caractères');
      	} 
      	else {
      		border_success($('#lastname'));
      	}

      	if($('#email').val() == ''){
      		errorEmpty = 1;
      		border_default($('#email'));
      	}
      	else if(!pattern.test($('#email').val())) {
      		error++;
      		border_error($('#email'));
      		txtError.push('Format de l\'email invalide');
      	} 
      	else {
      		border_success($('#email'));
      	}

      	if($('#formContent').val() == ''){
      		errorEmpty = 1;
      	}


      	if (error > 0) {
      		msgError = '<div class="alert alert-danger" role="alert">';
      		$.each(txtError, function(index, value) {
      			msgError += value + '<br>';
      		});
      		msgError += '</div>';

      		$('#formContact').before(msgError);
      		formValid = false;
      	}
      	else {
      		$('.alert').remove();
      		formValid = true;
      	}
	}
});