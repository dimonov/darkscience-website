<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Status";
include "./includes/head.inc.php";
?>
</head>

<body id='stat'>

	<div id='container'>
		<div id='header'>
			<a href='./' id='logo'></a>
			<div id='quote'>
			<?php
			include "./includes/rand_quote.inc.php";
			printf("%s", quote());
			?>
			</div>
		</div>
		<?php
		include './includes/nav.inc.php';
		?>

		<div id='main'>
			<img class='center' src='images/ds.png' alt='network map' /><br/>
			<div class='sec'>
				<h1>IRC Servers</h1>
				<h2></h2>
				<ul>
					<li class='pop'><b>arc.darkscience.ws</b><span> : Arc Hub - Operated by DarkScience - Dijit</span></li>
					<li class='pop'><b>bitfield.darkscience.ws</b><span> : Bitfield Link - Operated by DarkScience - dimonov</span></li>
					<li class='pop'><b>amnesia.darkscience.ws</b><span> : Amnesia Hub - Operated by <a href="http://www.sector5d.org">Sector5D</a> - kylef</span></li>
					<li class='pop'><b>prorsus.darkscience.ws</b><span> : Prorsus Link - Operated by <a href="http://www.sector5d.org">Sector5D</a> - Derecho</span></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


