<?php
// Receive "userNome", "userMail", "userFone", "userMsg" from Post
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['userMsg'])){
    $userNome = htmlspecialchars($_POST['userNome']);
    $subject = $userNome;

		if(isset($_POST['userMail'])){
			$subject = $subject . " - " . htmlspecialchars($_POST['userMail']);
		}

		if(isset($_POST['userFone'])){
			$subject = $subject . " - " . htmlspecialchars($_POST['userFone']);
		}
		
    $sender = "jh@jhdesenvolve.16mb.com";
    
		$to = "jhdesenvolve@gmail.com";
		$message = htmlspecialchars($_POST['userMsg']);
		
		// Set content-type
		$headers = "MIME-Version: 1.1n";
		$headers .= "Content-type:text/html;charset=UTF-8\n";
		
		// More headers
		$headers .= "From: " .  $sender . "\n";
    $headers .= "Return-Path: ". $sender ."\n"; // return-path

   // Endereço (devidamente validado) que o seu usuário informou no contato
		mail($to,$subject,$message,$headers);
	}
	else{
		$checker = false;
	}
  header("Location: contato.php"); //Redirect the user
}
?>