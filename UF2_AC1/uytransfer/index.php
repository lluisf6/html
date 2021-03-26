<html>

<head>
	<meta charset="utf-8">
	<title>uytrasnfer</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
</head>

<body>

	<?php
		include 'header.php';
	?>

	<form name="" action="upload.php" method="post" enctype="">
		<input type="text" name="tunombre" placeholder="Tu nombre">
		<br>
		<input type="file" name="arxiu">
		<br>
		<input type="checkbox" name="mail"> Lo quiero por mail
		<br>
		<input type="mail" name="email" placeholder="Email del destinatario">
		<br>
		<span id="text">Mensaje</span>
		<textarea name="missatge" placeholder="Si lo desea escribe tu u mensaje"></textarea>
		<br>
		<button type="submit">Subir archivo</button>			
	</form>

</body>

</html>