<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Links";
include "./includes/head.inc.php";
?>
</head>

<body id='links'>

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
				<h1>Communities Hosted on DarkScience</h1>
				<h2></h2>
				<ul class='column'>
				</ul> 
				<ul>	
					<li><a href='http://www.sector5d.org/' target='_blank'>Sector5D</a></li>
				</ul>
			</div>
	
			<div class='sec'>
				<h1>Sites We Like</h1>
				<h2></h2>
				<ul>
					<li><a href='http://www.smashthestack.org/' target='_blank'>SmashTheStack</a></li>
					<li><a href='http://www.overthewire.org/wargames/' target='_blank'>OverTheWire - Wargames</a></li>
					<li><a href='http://www.intruded.net/wargames' target='_blank'>Intruded - Wargames</a></li>
					<li><a href='http://www.awarenetwork.org/' target='_blank'>.aware network</a></li>
					<li><a href='http://www.owasp.org/' target='_blank'>Open Web Application Security Project</a></li>
					<li><a href='https://www.minemu.org/' target='_blank'>Minemu Dynamic Taint Analysis</a></li>
					<li><a href='http://www.remote-exploit.org/' target='_blank'>Remote-Exploit</a></li>
					<li><a href='http://www.fsf.org/' target='_blank'>Free Software Foundation</a></li>
					<li><a href='https://www.eff.org/' target='_blank'>Electronic Frontier Foundation</a></li>
					<li><a href='https://www.torproject.org/' target='_blank'>Tor Project</a></li>
					<li><a href='http://www.posixly.org/' target='_blank'>Posixly QDB</a></li>
				</ul>
			</div>
			<div class='sec'>
				<h1>Recommended Readings</h1>
				<h2></h2>
				<ul>
					<li><a href='http://www.phrack.org/' target='_blank'>Phrack Magazine</a></li>
					<li><a href='http://cacm.acm.org/magazines' target='_blank'>Communications of the ACM</a></li>
					<li><a href='http://www.openbsd.org/papers/' target='_blank'>OpenBSD Papers & Presentations</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


