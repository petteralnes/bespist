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

		<div id="ball"> <img id="B_bilde" src="img/bespistlogo_b.png" alt="B"> </div>

		<main>
			<div id="innfyll">

				<div id="kundereg">

					<?php
						error_reporting(-1);
						ini_set('display_errors', 'On');
						$tilkobling = mysqli_connect("localhost","root","root","bespist1");
						if(isset($_POST["submit"]))
							{
								$sql = sprintf("INSERT INTO kunde(kundeid, fornavn, etternavn, gatenavn, gatenummer, postnummer, telefonnr)
										VALUES('%s','%s','%s','%s','%s','%s','%s')",
											$tilkobling->real_escape_string($_POST["txtkundeid"]),
											$tilkobling->real_escape_string($_POST["txtfornavn"]),
											$tilkobling->real_escape_string($_POST["txtetternavn"]),
											$tilkobling->real_escape_string($_POST["txtgatenavn"]),
											$tilkobling->real_escape_string($_POST["txtgatenummer"]),
											$tilkobling->real_escape_string($_POST["txtpostnummer"]),
											$tilkobling->real_escape_string($_POST["txttelefonnr"])
								   );
						$tilkobling->query($sql);
						print $tilkobling->error;
							}
					?>

					<form action="bestillingdel2.php" method="post">
						<input placeholder="Kunde-ID (minst 5 tall)" type="text" name="txtkundeid" class="input" autocomplete="off"/>
						<input placeholder="Fornavn" type="text" name="txtfornavn" class="input" autocomplete="off"/>
						<input placeholder="Etternavn" type="text" name="txtetternavn" class="input" autocomplete="off"/>
						<input placeholder="Gatenavn" type="text" name="txtgatenavn" class="input" autocomplete="off"/>
						<input placeholder="Gatenummer" type="text" name="txtgatenummer" class="input" autocomplete="off"/>
						<input placeholder="Postnummer" type="text" name="txtpostnummer" class="input" autocomplete="off"/>
						<input placeholder="Telefon-nummer" type="text" name="txttelefonnr" class="input" autocomplete="off"/>

						<button id="submit" type="submit" name="submit">Send</button>
					</form>
				</div>
			</div>
		</main>
    </body>
</html>
