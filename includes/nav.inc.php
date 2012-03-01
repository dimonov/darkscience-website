		<div id='nav'>
			<a class='home' href='/'>Home</a>
			<a class='info' href='./info.php'>Info</a>
			<a class='stat' href='./status.php'>Status</a>
			<a class='articles' href='./articles.php'>Articles</a>
			<a class='library' href='./library.php'>Library</a>
			<a class='qdb' href='./quotes.php'>Quotes</a>
			<?php
$url1="";
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$url1 = "https://";
} else {
	$url1 = "http://";
}
		printf("<a class='irpg' href='%sirpg.darkscience.ws'>IdleRPG</a>", $url1);
			?>
			<a class='paste' href='./paste.php'>Paste</a>
			<a class='links' href='./links.php'>Links</a>
			<a class='faq' href='./faq.php'>FAQ</a>
			<a class='snm' href='./snm.php'>SNM</a>
			<a class='vpn' href='./vpn.php'>VPN</a>
			<a class='wargames' href='./wargames.php'>Wargames</a>
			<a class='history' href='./history.php'>History</a>
			<a class='contact' href='./contact.php'>Contact</a>
		</div>
<?php
	/*	<a class='bbs' href='./bbs.php'>BBS</a>
?>		<a class='staff' href='./staff.php'>Staff</a>*/
