<?php
	if(!empty($_FILES)) {
		$uploaddir = './PLIKI/'; //SCIEZKA Z FOLDEREM PRZECHOWYWUJACYM PLIKI UZYTKWONIKOW
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			header("Location: ./.");
		} 
		else {
			echo "<script type=\"text/javascript\">alert(\"Źle lub wcale nadałeś/aś gołębiowi pliczku więc odleciał bez pniego :C\")</script>";
		}
	}
?>

<html>
	<head>
		<title>Gołąb Pocztowy</title>
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
		<link rel="icon" href="golomp.jpg" type="image/gif" sizes="16x16">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<section id="sekcja_tytulowa">
			Wyślij gołębia
		</section>

		<main>
		<div id="blok">
			<div id="tytul">MAX rozmiar pliczku 8 MB</div>
			<form enctype="multipart/form-data" action="wyslij.php" method="POST" >
			<input name="userfile" type="file">
			<br>
			<button type="submit">Wyślij do dziupli</button>
			</form>
			<a href="./">Powrót</a>
			</div>
		</main>
		<footer id="stopka_dla_wysylania">
			<hr>
			<br>
			<center>Autrostwo: Mareckie koło miłośników  ludzików z kasztanów <br> --- <br>Generated by: Mlekovita Sp. Z.O.O</center>
		</footer>
	</body>
</html>

