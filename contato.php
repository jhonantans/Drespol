<!DOCTYPE html/>
<html lang="pt-Br">
<head>
	<title>Contato JhDesenvolve</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Informações para contato"/>
  <meta name="author" content="Jhon"/>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" href="img/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="baseStyle.css" />
	<link rel="stylesheet" type="text/css" href="contatoStyle.css">
	<script type="text/javascript" src=""></script>
</head>

<body>
	<?php include 'navBase.html';?>

	<div id="main-content">
		<div id="contatos" class="section">
			<h1>Contate-nos!</h1>
			<p>Estamos sempre a postos para atender você e sua empresa. Envie seu pedido, nós fazemos um orçamento para você.</p>
			<br>
			<p>Email: <a href="mailto:jhdesenvolve@gmail.com">jhdesenvolve@gmail.com</a></p>
			<p>Fone: (62) 8108-9953</p>
		</div>
		<div id="fale-conosco" class="section">
			<h2>Fale Conosco</h2>
    	<form method="post" id="formulario" action="sendMail.php">
          <label for="userNome">** Nome</label>
          <input type="text" name="userNome" placeholder="Nome do Cliente" required>
          
          <label for="userMail">** Email</label>
          <input type="mail" name="userMail" placeholder="cliente@email.com" required>
          
          <label for="userFone">Fone</label>
          <input type="tel" name="userFone" placeholder="(62) 8888-0000">

          <label for="userMsg">** Mensagem</label>
          <textarea name="userMsg" placeholder="Envie sua Mensagem" required></textarea>
          
          <input type="submit" id="but-enviar" value="Enviar">
      </form>
		</div>
	</div>

	<?php include 'footBase.html';?>
	
</body>
</html>