<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Contact";
include "./includes/head.inc.php";
?>
</head>

<body id='contact'>

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
				<h1>Contact</h1>
				<h2></h2>
				<ul>
					<li
					class='pop'><span><b>IRC:</b>
					join the channel <a><b>#darkscience</b></a> or <a><b>#sector5d</b></a> for a quicker way to contact us.</span></li>
					<li
					class='pop'><span><b>email:</b>
					email us at ircops [at] darkscience.ws. Additionally,
					you may email our irc operators by using
					oper_name [at] darkscience.ws</span></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


