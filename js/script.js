$(function(){

	console.log('jQuery Ok');

	$('#formContact').ready(function(){
		console.log('formulaire chargé');


		$('input').focusout(function() {
			var error = 0;
			var txtError = [];
			var msgError = '';

			$('.alert').remove();

			if($('#firstname').val() == ''){
	      		error = 2;
	      		$('#firstname').css('border-color', '#ccc');
	      	}
	      	else if($('#firstname').val().length < 3 || $('#firstname').val().length > 15) {
	      		error = 1;
	      		$('#firstname').css('border-color', 'red');
	      		txtError.push('Le prénom doit contenir entre 3 et 15 caractères');
	      	} 
	      	else {
	      		$('#firstname').css('border-color', 'green');
	      	}

	      	if($('#lastname').val() == ''){
	      		error = 2;
	      		$('#lastname').css('border-color', '#ccc');
	      	}
	      	else if($('#lastname').val().length < 3 || $('#lastname').val().length > 15) {
	      		error = 1;
	      		$('#lastname').css('border-color', 'red');
	      		txtError.push('Le nom doit contenir entre 3 et 15 caractères');
	      	} 
	      	else {
	      		$('#lastname').css('border-color', 'green');
	      	}

	      	if (error == 1) {
	      		msgError = '<div class="alert alert-danger" role="alert">';
	      		$.each(txtError, function(index, value) {
	      			msgError += value + '<br>';
	      		});
	      		msgError += '</div>';

	      		$('#formContact').before(msgError);
	      	}
	      	else {
	      		$('.alert').remove();
	      	}
		});

		$('input[type="reset"]').click(function (e) {
			$('#firstname').css('border-color', '#ccc');
			$('.alert').remove();
		});

		$('#formContact').submit(function (e) {
			e.preventDefault();
			if (error != 0) {
				console.log('Erreurs dans le formulaire');
			} 
			else {
				console.log('formulaire envoyé');
			}
		});


	})

});