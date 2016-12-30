<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> This is Anfield </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="../Css/meni.css">
		<link rel="stylesheet" type="text/css" href="../Css/sadrzaj.css">
		
		<SCRIPT src="../Javascript/anfield.js"></SCRIPT>
	</head>
	
	<?php 
		function validirajXSS($_unos) 
		{
			$_unos = trim($_unos);
			$_unos = stripslashes($_unos);
			$_unos = htmlspecialchars($_unos, ENT_QUOTES );
			return $_unos;
		}
		
		
	?>

	<body>
		<div class="red">
			<div class="kolona jedan anfield">
				<img alt="stadion" class="slika" src="<?php  $_XML = simplexml_load_file("../Xml/anfield.xml"); echo $_XML->slike->slika1; ?>">
			</div>
			
			<div class="kolona tri anfield">
				<div class="tekst anfield">
					<?php echo $_XML->tekst;?>
				</div>
			</div>
		</div>
		
		<div class="red">
			<div class="kolona dva">
				<img alt="stadion" class="slika" src="<?php echo $_XML->slike->slika2;?>">
			</div>
			
			<div class="kolona dva">
				<img alt="stadion" class="slika" src="<?php echo $_XML->slike->slika3;?>">
			</div>
		</div>
		
		<div class="red">
			<div class="kolona dva">
				<form id="formaPoruka" action="action_page.php" class="posaljiPoruku">
					<fieldset>
						<legend> Pošalji poruku: </legend>
						Ime i prezime:
						<input id="imeIPrezime" type="text" name="imeIPrezime" class="unos">
						<br> <br>
						Telefon: 
						<input id="telefon" type="text" name="telefon" class="unos"> 
						<br> <br>
						Email adresa: 
						<input id="email" type="text" name="email" class="unos">
						<br> <br>
						Sadržaj poruke:
						<textarea id="poruka" name="sadrzaj" cols="40" rows="5" class="unos"></textarea>
						<br> <br>
						<input type="reset" value="Reset" class="ponisti">
						<input id="posalji" type="button" value="Submit" class="potvrdi" onclick="prikaziPoruku()"> <br>
						<div id="greska"> </div>
					</fieldset>
				</form>
			</div>
		
			<div class="kolona dva">
				<fieldset id="fieldSet">
					<legend> Sadržaj poruke: </legend>
					<div id="sadrzajPoruke">
					</div>
				</fieldset>
			</div>
		</div>
		
	</body>
</html>