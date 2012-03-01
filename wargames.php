<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Wargames";
include "./includes/head.inc.php";
?>
</head>

<body id='wargames'>

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
			<div class='sec'>
				<h1>Wargames</h1>
				<h2></h2>
				<p>DarkScience hosts and maintains UNIX wargame machines. A wargame is an environment which teaches exploitation techniques in a legal way.</p>
				<p>For help on the levels, join our IRC channel at <a><b>#wargames</b></a>. Note that SSH is required to access the wargames.</p>
				<br/>
				<ul>
					<li class='pop'><span><b>carbon:</b> ssh -p 26 level0@carbon.darkscience.ws | <i>password: carbon_lvl0</i> | status: unfinished, outline <a href='http://s.darkscience.ws/fkn68Z'>here</a></span></li>
					<li class='pop'><span><b>thebackupbox:</b> ssh -p 24 level0@hack.thebackupbox.net | <i>password: h4x0r3d</i> | status: complete</i></span></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


