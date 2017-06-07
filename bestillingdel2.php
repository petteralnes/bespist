<!DOCTYPE html>
<html>
    <head>
        <title>Bespist</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/nettsidestil.css">
		<link rel="stylesheet" href="css/bestilling.css">
		<link rel="icon" href="img/bespist.png">

    </head>
    <body>
		<div id="header">
			<a href="index.php"><img id="bilde" alt="logo" src="img/bespistlogo.png"></a>
			<nav id="navigasjon">
				<a href="index.php"><div class="menybtn"><p>HJEM</p></div></a>
				<a href="meny.php"><div class="menybtn"><p>MENY</p></div></a>
				<a href="bestilling.php"><div class="menybtn"><p>BESTILLING</p></div></a>
			</nav>
		</div>
		<main>
			<div id="bestillingreg">
				<?php
					ini_set('display_errors', 'On');
					$tilkobling = mysqli_connect("localhost","root","root","bespist1");
					if(isset($_POST["submit"]))
						{
							$sql = sprintf("INSERT INTO bestilling(kundeid, forrett, hovedrett, dessert)
									VALUES('%s','%s','%s','%s')",
										$tilkobling->real_escape_string($_POST["txtkundeid"]),
										$tilkobling->real_escape_string($_POST["txtforrett"]),
										$tilkobling->real_escape_string($_POST["txthovedrett"]),
										$tilkobling->real_escape_string($_POST["txtdessert"])
							   );
					$tilkobling->query($sql);
					print $tilkobling->error;
						}
				?>
				<h1 id="overskrift2">Bestilling</h1>
				<h3 class="info">Her kan du bestille fra vår meny: Én forrett, hovedrett og dessert.</h3>
				<h3 class="info">Gå til menyen og finn hvilke orddrenummer du vil ha, deretter tilbake hit.</h3>
				<h3 class="info">Vennligst benytt kunde-id som du registrerte deg som.</h3>
				<h3 class="info">Når du har klikket "send" er din bestilling sendt til våre kokker.</h3>
				<h3 class="info">Om du ikke ønsker for eksempel dessert, lar du bare feltet stå tomt.</h3>

				<form method="post">
					<input placeholder="Kunde id" type="text" name="txtkundeid" class="input" autocomplete="off"/>
					<input placeholder="Forrettnr." type="text" name="txtforrett" class="input" autocomplete="off"/>
					<input placeholder="Hovedrettnr." type="text" name="txthovedrett" class="input" autocomplete="off"/>
					<input placeholder="Dessertnr." type="text" name="txtdessert" class="input" autocomplete="off"/>

					<button id="submit" type="submit" name="submit">Send</button>
				</form>
				<h3 class="info">Takk for din bestilling.</h3>
			</div>
		</main>

    </body>
</html>
