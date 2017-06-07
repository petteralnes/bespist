<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	$tilkobling = mysqli_connect('localhost','root','root','bespist1');
	$sql = "SELECT * FROM kunde, bestilling WHERE kunde.kundeid = bestilling.kundeid";
	$datasett = $tilkobling->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Motatte bestillinger</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/motatt.css">
		<link rel="icon" href="img/bespist.png">

    </head>
    <body>

		<h1>Bestillinger</h1>
		<table>
			<tr>
				<th>Kundeid</th>
				<th>Navn</th>
				<th>Adresse</th>
				<th>Postnummer</th>
				<th>Orddrenummer</th>
				<th>Telefonnummer</th>
				<th>Forrett</th>
				<th>Hovedrett</th>
				<th>Dessert</th>
			</tr>
			<?php while($rad = mysqli_fetch_array($datasett)) { ?>
			<tr>
				<td><?php echo $rad["kundeid"]; ?></td>
				<td><?php echo $rad["fornavn"]; ?> <?php echo $rad["etternavn"]; ?></td>
				<td><?php echo $rad["gatenavn"]; ?> <?php echo $rad["gatenummer"]; ?></td>
				<td><?php echo $rad["postnummer"]; ?></td>
				<td><?php echo $rad["bestillingsid"]; ?></td>
				<td><?php echo $rad["telefonnr"]; ?></td>
				<td><?php echo $rad["forrett"]; ?></td>
				<td><?php echo $rad["hovedrett"]; ?></td>
				<td><?php echo $rad["dessert"]; ?></td>

			</tr>
			<?php } ?>
		</table>
    </body>
</html>
