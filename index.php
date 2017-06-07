<!DOCTYPE html>
<html>
    <head>
        <title>Bespist</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/nettsidestil.css">
		<link rel="stylesheet" href="css/index.css">
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
		<a href="#"><div id="ball"> <img id="B_bilde" src="img/bespistlogo_b.png" alt="B"> </div></a>

		<img id="hovedbilde" src="img/forside.jpg" alt="Barcelona">
		<header>
			<div class="title">
				<h1 id="overskrift">Bespist</h1>
			</div>
		</header>

		<div id="koddrit">
			<img src="img/team.jpg" alt="matbilde" id="matbilde">
			<h3>Velkommen</h3>
			<p id="heiheihei">
				At vero eos et accusamus et iusto odio dignissimos ducimus
				qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
				et quas molestias excepturi sint occaecati cupiditate non provident,
				similique sunt in culpa qui officia deserunt mollitia animi, id est
				laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
				distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
				cumque nihil impedit quo minus id quod maxime placeat facere possimus,
				omnis voluptas assumenda est, omnis dolor repellendus.

		</div>

		<div id="per">
			<h2 id="ko" onclick="lol()">Kokkens Ord</h2>
			<img src="img/chef.jpg" alt="chef" id="kokken">
			<p class="info">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem
				accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
				illo inventore veritatis et quasi architecto beatae vitae dicta sunt
				explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
				odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
				voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
				quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
				eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
				voluptatem. <br><br> - Per S. Mak
			</p>
		</div>

		<footer>
			<p id="kontakt">Kontakt oss!</p>
			<ul>
				<li><strong>Email:</strong> per.mak@bespist.com</li>
				<a href="#"><li id="face">Facebook</li></a>
				<li><strong>TLF:</strong>+47 001 00 110</li>
			</ul>
		</footer>
		<script>
			Function lol() {
				document.getElementById("overskrift").style.color = "red";
			}
		</script>
    </body>
</html>
