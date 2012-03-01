<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "F.A.Q.";
include "./includes/head.inc.php";
?>
</head>

<body id='faq'>

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
				<h1>Frequency Asked Questions</h1>
				<h2></h2>
				<p><b>Where is _nick_?</b><br/>
				You could try looking for a person in
				the most populated channels, use
				 /whowas _nick_ to find out whether
				 the person you're seeking has been on
				 IRC recently, or just /quote message
				 nickserv info _nick_ to find out
				 whether the nickname is even
				 registered with our services. 
				<br/>
				<br/>
				<b>Do you support tor connections?</b><br/>
				<i>Short answer:</i> <b>Yes</b>.<br/>
				<i>Long answer:</i> DarkScience in the past
				restricted tor connections because
				they could be used for spam. But in
				light of recent privacy concerns, and
				also because there just aren't too
				many IRC networks that allow tor (most
				of the public IRC networks K-Line tor
				exit nodes), as of November 30, 2011,
				tor connections have been allowed
				globally on our servers, and we hope
				to be a better IRC network by assuring
				our users an option for privacy, if they so
				choose, to use tor.<br/>
				<i>DarkScience tor hidden services url:</i> 					<a href="ircs://tor.irc.darkscience.ws:6697">tor.irc.darkscience.ws</a> or <a href="ircs://uulnil6kctncrbrp.onion:6697">uulnil6kctncrbrp.onion</a>.
				<br/>
				<br/>
				<b>Can I link a server to the IRC
				network?</b><br/>
				We have a few requirements:<br/>
					<ul>
			<li class='pop'><span>continuous uptime</span></li>
			<li class='pop'><span>the server must use
			InspIRCd</span></li>
			<li class='pop'><span>a UNIX-based operating system</li>
			<li class='pop'><span>an existing userbase, with the
			oper:user ratio 1:5 or less.</li>
			<li class='pop'><span>run an NTPd to keep time in sync between
			servers</li>
			<li class='pop'><span>you must have root on the server in
			question</li>
			<li class='pop'><span>you inform us of any bandwidth limits you
			may have</li>
			<li class='pop'><span>you provide a list of opers and people who 
			have shell access on the server in
			question</li>
					</ul>
				<br/>
				contact one of our opers, or join
				#darkscience, and get to know us for a
				while first. We won't bite. The worst
				you can get is a flat-out rejection,
				but we treat every scenario on an
				individual basis.
				<br/>
				<br/>
				<b>My IRC client doesn't work when I
				try to connect to port 6667.</b><br/>
				DarkScience is an <b>SSL</b>-only network,
				and we accept connections on port
				<b>6697</b>. You may need to configure
				`your client to use SSL, for more
				information on doing this, see the <a
				href='./info.php'>info
				page</a>. Connecting on 6667 will most
				likely give you a self-explanatory
				cowsay ascii art.
				<br/>
				<br/>
				<b>What do you offer?</b><br/>
				DarkScience offers a nice community to
				be part of. Apart from that, we
				offer:<br/>
				<ul>
				<li class='pop'><span>a library of
				interesting third-party
				papers</span></li>
				<li class='pop'><span>SSL used to
				secure all our network's connections
				to prevent eavesdropping</span></li>
				<li class='pop'><span>an on-IRC game
				IdleRPG
				<li class='pop'><span>movies streamed
				every saturday night</span></li>
				<li class='pop'><span>wargames to test
				your skill</span></li>
				<li class='pop'><span>we play frequent
				multiplayer games like CoD4, check out
				<a><b>#gaming</b></a>.</span></li>
				<li class='pop'><span>our own paste
				website, so you don't have to use
				pastebin (they have long retention
				times) or fpaste</span></li>
				</ul>
				<br/>
				<br/>
				<b>There are people in the Oper list I
				don't recognize.</b><br/>
				Haven't you heard? We're under new
				management :)
				</p>
			</div>
		</div>
	</div>
</body>
</html>


