<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "VPN";
include "./includes/head.inc.php";
?>
</head>

<body id='vpn'>

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
			<img class='center' src='images/tofui.png' alt='vpn network map' /><br />
			<div class='sec'>
				<h1>VPN</h1>
				<h2></h2>
				<p>DarkScience is a member organization of the <a href='http://www.tofui.org/'>Tofui VPN Project</a> and uses tinc to form a fully encrypted mesh VPN network. The VPN (Virtual Private Network) is a network closed from outside communications, allowing for the DarkScience community to network with other communities in a (more) private manner.</p>
				<br/>
				<p>At the moment, DarkScience provides IRC services within the VPN. Once inside the VPN, you can connect to our ircd's running on:</p>
				<br/>
				<ul>
				<li class='pop'><span><b>23.1.17.1 - bitfield</b></span></li>
				<li class='pop'><span><b>23.1.18.1 - arc</b></span></li>
				</ul>
				<br/>
				<p>For more information on machines within the VPN, click <a href='http://tofui.org/wiki/NetworkTopology'>here<a>.</p>
			</div>
		</div>
	</div>
</body>
</html>


