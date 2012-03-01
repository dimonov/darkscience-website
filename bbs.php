<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "BBS";
include "./includes/head.inc.php";
?>
</head>

<body id='bbs'>

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

				<h1>The DarkScience BBS</h1>
				<h2></h2>
				<p>The DarkScience BBS is a telnet BBS system running a customized Synchronet BBS system. It has remained a part of our community since its birth. Just point your favorite telnet/ssh client to <a href="telnet://bbs.darkscience.org">bbs.darkscience.org</a> <!--The BBS is also available via TOR hidden services at <a href='onion://opwg3dzxb4kczfbx.onion'>opwg3dzxb4kczfbx.onion</a>-->.</p>
				<br />
				<p>The BBS is driven with ANSI graphics, so you'll need a compliant telnet/ssh client to fully enjoy your experience. While calling, we stress that you visit the xternal program sections, which contains many multi-user DOOR Games and Utilities that most callers find enjoyable, as well as the Message Boards.</p>
				<br />
				<p class='bold'>Some suggested telnet/ssh clients are:</p>
				<ul>
					<li><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html" target="_blank">Putty</a></li>
					<li><a href="http://www.openssh.com/" target="_blank">OpenSSH</a></li>
				</ul>

			</div>
		</div>
	</div>
</body>
</html>


