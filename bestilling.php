<?php
error_reporting(-1);
ini_set('display_errors', 'On');
    $tilkobling = mysqli_connect("localhost","root","root","bespist1");
	$sql = "SELECT matretter.beskrivelse, matretter.matrettid, matretter.matrettnavn, matretter.matbilde, kategori.kategorinavn
            FROM kategori, matretter
            WHERE matretter.kategoriid = kategori.kategoriid";
	$datasett = $tilkobling->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bespist</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="nettsidestil.css">
		<link rel="icon" href="bespist.png">

    </head>
    <body>
		<div id="header">
			<a href="index.php"><img id="bilde" alt="logo" src="bespistlogo2.png"></a>
			<nav id="navigasjon">
				<a><div class="meny"><p>MENY</p></div></a>
				<a><div class="meny"><p>MENY</p></div></a>
				<a><div class="meny"><p>Bestilling</p></div></a>
			</nav>
		</div>
		<div id="ball"> <img id="B_bilde" src="bespistlogo_b.png" alt="B"> </div>
		<main>
			<table>
				<tr>
					<th>Kategorinavn</th>
					<th>Matrettid</th>
					<th>Varenavn</th>
					<th>Bilde</th>
			  	</tr>
				<?php while($rad = mysqli_fetch_array($datasett)) { ?>
			  	<tr>
					<td><?php echo $rad["kategorinavn"]; ?></td>
					<td><?php echo $rad["matrettid"]; ?></td>
					<td><?php echo $rad["matrettnavn"]; ?></td>
					<td><?php echo $rad["beskrivelse"]; ?></td>
					<td><img src="/img<?php echo $rad["matbilde"]; ?>" alt="bilde"></td>
			  	</tr>
				<?php } ?>
			</table>
		</main>
    </body>
</html>
