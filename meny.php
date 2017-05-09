<!DOCTYPE html>
<html>
    <head>
        <title>Bespist</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/nettsidestil.css">
		<link rel="stylesheet" href="css/meny.css">
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
			<div id="matrett_nav">
				<div class="matrett_btn" onclick="frett()"><h2>Forett</h2></div>
				<div class="matrett_btn" onclick="hrett()"><h2>Hovedrett</h2></div>
				<div class="matrett_btn" onclick="dessert()"><h2>Dessert</h2></div>
			</div>

			<div id="matrett_vis">
				<div id="forretter">
					<?php
						error_reporting(-1);
						ini_set('display_errors', 'On');
						$tilkobling = mysqli_connect("localhost","root","root","bespist1");
						$sql = "SELECT matretter.beskrivelse, matretter.matrettnavn, matretter.matbilde, matretter.matrettid, kategori.kategorinavn
								FROM kategori, matretter
								WHERE matretter.kategoriid = kategori.kategoriid AND kategori.kategoriid = 1";
						$datasett = $tilkobling->query($sql);
					?>

					<?php while($rad = mysqli_fetch_array($datasett)) { ?>

					<div class="matvisning">
						<div class="mat_info">
							<h2><?php echo $rad["matrettnavn"]; ?></h2>
							<img class="matbilde" src="img/forrett/<?php echo $rad["matbilde"]; ?>" alt="bilde">
						</div>
						<div class="mat_info2">
							<p class="matbeskrivelse"><?php echo $rad["beskrivelse"]; ?></p>
						</div>
					</div>

					<?php } ?>
				</div>

				<div id="hovedretter">
					<?php
						error_reporting(-1);
						ini_set('display_errors', 'On');
						$tilkobling = mysqli_connect("localhost","root","root","bespist1");
						$sql = "SELECT matretter.beskrivelse, matretter.matrettnavn, matretter.matbilde, matretter.pris, kategori.kategorinavn
								FROM kategori, matretter
								WHERE matretter.kategoriid = kategori.kategoriid AND kategori.kategoriid = 2";
						$datasett = $tilkobling->query($sql);
					?>

					<?php while($rad = mysqli_fetch_array($datasett)) { ?>
					<div class="matvisning">
						<div class="mat_info">
							<h2><?php echo $rad["matrettnavn"]; ?></h2>
							<img class="matbilde" src="img/hovedrett/<?php echo $rad["matbilde"]; ?>" alt="bilde">
						</div>
						<div class="mat_info2">
							<p class="matbeskrivelse"><?php echo $rad["beskrivelse"]; ?></p>
						</div>
					</div>

					<?php } ?>
				</div>

				<div id="desserter">
				<?php
					error_reporting(-1);
					ini_set('display_errors', 'On');
					$tilkobling = mysqli_connect("localhost","root","root","bespist1");
					$sql = "SELECT matretter.beskrivelse, matretter.matrettnavn, matretter.matbilde, kategori.kategorinavn
							FROM kategori, matretter
							WHERE matretter.kategoriid = kategori.kategoriid AND kategori.kategoriid = 3";
					$datasett = $tilkobling->query($sql);
				?>

				<?php while($rad = mysqli_fetch_array($datasett)) { ?>
					<div class="matvisning">
						<div class="mat_info">
							<h2><?php echo $rad["matrettnavn"]; ?></h2>
							<img class="matbilde" src="img/dessert/<?php echo $rad["matbilde"]; ?>" alt="bilde">
						</div>
						<div class="mat_info2">
							<p class="matbeskrivelse"><?php echo $rad["beskrivelse"]; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
			</div>
		</main>

		<script>
			var f = document.getElementById("forretter");
			var h = document.getElementById("hovedretter");
			var d = document.getElementById("desserter");

			function frett() {
				f.style.display = "block";
				h.style.display = "none";
				d.style.display = "none";
			}

			function hrett() {
				f.style.display = "none";
				h.style.display = "block";
				d.style.display = "none";
			}

			function dessert() {
				f.style.display = "none";
				h.style.display = "none";
				d.style.display = "block";
			}
		</script>
    </body>
</html>
