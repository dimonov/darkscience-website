<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Paste";
include "./includes/head.inc.php";
?>
</head>

<body id='paste'>

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
				<h1>Paste</h1>
				<h2></h2>
				<p>DarkScience maintains it's own
				paste site. use the unix command:
				<b>[command] | curl -F 'paste=<-'
				http://s.darkscience.ws</b>. The
				latter can be saved as an executable
				file called snippt, for easy piping with your
				shell.</p>
				<br/>
				<p>Additionally, you may visit the
				<a href='http://s.darkscience.ws'>paste site</a> directly for in-browser
				pasting.</p>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>


