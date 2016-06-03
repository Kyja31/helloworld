<?php
session_start();

	if (isset($_POST['email'], $_POST['firstname'], $_POST['lastname'])) {
        try {
            $db = new PDO('mysql:host=localhost;dbname=beta','root', '');
//            $db = new PDO('mysql:host=moietudiktfablar.mysql.db;dbname=moietudiktfablar','moietudiktfablar', 'artARTart31');
        } catch(PDOException $e) {
            die($e->getMessage());
        }


        $emailadress = $_POST['email'];
        $existingSignup = $db->prepare("SELECT COUNT(*) FROM email WHERE emailadress = '$emailadress' ");
        $existingSignup->execute();
        $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

        if (!$data_exists) {
            $req = $db->prepare(
			'INSERT INTO email(emailadress, prenom, nom) 
			 VALUES (:emailadress, :firstname, :lastname)'
			 );

			$req->execute(array(
				'emailadress' => htmlentities($_POST['email']),
				'firstname'   => htmlentities($_POST['firstname']),
				'lastname'    => htmlentities($_POST['lastname']),
				));
			$_SESSION['prenom'] = $_POST['firstname'];
			header('Location:merci.php');

	    } else {
	    	$_SESSION['email'] = 'exists';
	    	header('Location:exists.php');
	    }


}