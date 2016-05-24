<?php 

//On éxécute le code seulement si on à eu une requête Ajax
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {

	require_once 'fonctions.php';

	$post = []; //Variable qui contiendra les données de la variable $_POST
	$error = []; //Variable qui contiendra les messages d'erreurs

	//Si on a bien reçu les données en POST
	if (!empty($_POST)) {

		//on les nettoye puis on les mets dans $post 
		$post = cleanArray($_POST);

		//Vérification de la longueur du prénom
		if (!minOrMaxLength($post['firstname'],3,15)) {
			$error[] = 'Le prénom doit contenir entre 3 et 15 caractères';
		}

		//Vérification de la longueur du nom
		if (!minOrMaxLength($post['lastname'],3,15)) {
			$error[] = 'Le nom doit contenir entre 3 et 15 caractères';
		}

		//Vérification du format de l'email
		if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL))  {
			$error[] = 'l\'adresse mail n\'est pas valide';
		} 

		//Vérification si le contenu n'est pas vide
		if (empty($post['formContent'])) {
			$error[] = 'Le contenu ne doit pas être vide';
		}

		//Si il y a une erreur 
		if (!empty($error)) {
			echo implode('<br>', $error);
		} 
		else {

			/*$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

			$mail->isSMTP();                                      	// Set mailer to use SMTP
			$mail->Host = '';  										// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               	// Enable SMTP authentication
			$mail->Username = '';             						// SMTP username
			$mail->Password = '';                   				// SMTP password
			$mail->SMTPSecure = '';                            		// Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    	// TCP port to connect to

			$mail->setFrom($post['email'], $post['firstname'].' '.$post['lastname']);
			$mail->addAddress('adress@email.com');   				// Add a recipient, Name is optional
			$mail->isHTML(true);                                  	// Set email format to HTML

			$mail->Subject = 'Contact du site';
			$mail->Body    = nl2br($post['formContent']);
			$mail->AltBody = $post['content'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$mailSuccess = true;
			}*/

			echo 'Votre message à bien été envoyé !';

		}

	}

}