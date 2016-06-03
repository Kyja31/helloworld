<?php
session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if (isset($_POST['message'], $_POST['email'], $_POST['firstname'], $_POST['lastname'])) {
	$fields = [
		'message'  => $_POST['message'],
		'email'    => $_POST['email'],
		'firstname'=> $_POST['firstname'],
		'lastname' => $_POST['lastname']
	];

	foreach ($fields as $field => $data) {
		if(empty($data)) {
			$errors[] = $field . 'manquant.';
		}
	}

	if (empty($errors)) {
		$m = new PHPMailer;

		$m->isSMTP();
		$m->SMTPAuth = true;

		$m->Host = 'SSL0.OVH.NET';
		$m->Username = 'hello@fablart.com';
		$m->Password = 'aa';
		$m->SMTPSecure = 'ssl';
		$m->Port = 465;

		$m->isHTML();

		$m->Subject = 'Nouveau message sur Fablart';
		$m->Body = 'From: ' . $fields['firstname'] . ' ' . $fields['lastname'] . ' (' . $fields['email'] . ') <p>' . $fields['message'] . '</p>';

		$m->FromName = 'Contact';

		$m->AddAddress('hello@fablart.com', 'Jacky VINCENT');

		if($m->send()) {
			$_SESSION['messageenvoye'] = 'hello';
			header('Location: envoye.php');
		} else {
			$_SESSION['echec'] = 'hello';
			header('Location: echec.php');
		}
	}

} else {
	$errors[] = "Something went wrong";
}