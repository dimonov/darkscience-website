<!DOCTYPE html>
<html lang='en'>

<head>
<?php
include "./includes/head.inc.php";
?>
</head>

<body id='home'>

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
				<h1>Welcome to DarkScience</h1>
				<h2></h2>
				<p>Welcome. Here you will find a group of enthusiasts with a shared interest in computer science. Our community thrives on IRC, and we highly recommend that you point your favorite IRC client to <a href='ircs://irc.darkscience.ws:6697/darkscience'><b>irc.darkscience.ws</b></a>. Please feel free to explore and enjoy the services and features that our community has to offer.</p>
			</div>
			<div class='sec'>
				<h1>Saturday Night Movie</h1>
				<h2></h2>
				<p>The SNM is hosted on Saturdays at 00:00 GMT, please join <a><b>#drive-in</b></a> on the irc to talk to like minded cinephiles.</p><br />
				<img class='center' src='images/snm.gif' alt='saturday night movie' />
			</div>
			<div class='sec'>
			<br /><br /><a href='http://www.venda.com/pci-compliance-certificate?referer=http://www.darkscience.ws'><img class='center' src='images/en_pcilogo_dark.png' alt='PCI' /></a></p>
			</div>
		</div>
	</div>
</body>
</html>


