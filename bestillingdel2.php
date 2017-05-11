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
			<div id="bestillingreg">
				<?php
					error_reporting(-1);
					ini_set('display_errors', 'On');
					$tilkobling = mysqli_connect("localhost","root","root","bespist1");
					if(isset($_POST["submit"]))
						{
							$sql = sprintf("INSERT INTO bestilling( kundeid, forrett, hovedrett, dessert)
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

				<form method="post">
					<input placeholder="Kunde id du skrev inn tidligere" type="text" name="txtkundeid" class="input" autocomplete="off"/>
					<input placeholder="Forrett-nummer" type="text" name="txtforrett" class="input" autocomplete="off"/>
					<input placeholder="Hovedrett-nummer" type="text" name="txthovedrett" class="input" autocomplete="off"/>
					<input placeholder="Dessert-nummer" type="text" name="txtdessert" class="input" autocomplete="off"/>

					<button id="submit" type="submit" name="submit">Send</button>
				</form>
			</div>
		</main>

    </body>
</html>
