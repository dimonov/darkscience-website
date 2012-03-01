<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Info";
include "./includes/head.inc.php";
?>
</head>

<body id='info'>

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
				<h1>How To Join DarkScience</h1>
				<h2></h2>
				<p>The Darkscience community is composed of several linked IRC servers. To join, follow these steps.</p>
				<br />
				<p>Step 1. Get an IRC client.</p>
				<br />
				<div class='irc'>
					<ul>
						<li>Recommended Windows Clients:</li>
					</ul>
					<ul class='padding'>
							<li><a href='http://www.xchat.org/' target='blank'>XChat</a></li>
							<li><a href='http://www.mirc.com/' target='blank'>mIRC</a></li>
							<li><a href='http://irssi.org/' target='blank'>irssi</a></li>
							<li><a href='http://www.pidgin.im/' target='blank'>Pidgin</a></li>
					</ul>
					<ul>
						<li>Recommended *nix Clients:</li>
					</ul>
					<ul class='padding'>
							<li><a href='http://www.xchat.org/' target='blank'>XChat</a></li>
							<li><a href='http://kchat.sourceforge.net/' target='blank'>kChat</a></li>
							<li><a href='http://irssi.org/' target='blank'>irssi</a></li>
							<li><a href='http://www.pidgin.im/' target='blank'>Pidgin</a></li>
					</ul>
					<ul>
						<li>Recommended Mac Clients:</li>
					</ul>
					<ul class='padding'>
							<li><a href='http://xchataqua.sourceforge.net/' target='blank'>XChat Aqua</a></li>
							<li><a href='http://colloquy.info/' target='blank'>Colloquy</a></li>
					</ul>
					<br />
					<p>*Pidgin is not recommended above any other IRC client.</p>
				</div>
				<br />
				<p>Step 2. Join the IRC server.</p>
				<br />
				<div class='irc'>
					<p>Once you have your IRC client, use the following commands to get connected to the server:</p>
					<ul>
						<li><div class='pop'>/server irc.darkscience.ws +6697 <span>To connect (with SSL encryption by default).</span></div></li>
						<li><div class='pop'>/join #channel <span>Where #channel can be any channel that is listed in the IRC Channels section below.</span></div></li>
					</ul>
					<br />
					<p>*Windows users will need the <a href='http://www.slproweb.com/products/Win32OpenSSL.html'>SSL binaries</a> installed to connect with SSL.</p>
					<br />
				</div>
				<p>Step 3. Getting comfortable.</p>
				<br />
				<div class='irc'>
					<p>There are several basic commands that can help you customize your IRC experience:</p>
					<ul>
						<li><div class='pop'>/nick nickname <span>Where nickname can be any name you'd like to go by (Cannot contain spaces or special characters).</span></div></li>
						<li><div class='pop'>/msg nickserv register password email <span>You can register your nickname to prevent it from being used by someone other than yourself. Once you have registered, you will recieve an email asking you to verify your account (Make sure to use a valid email address). </span></div></li>
						<li><div class='pop'>/msg nickserv identify password <span>Use this command to identify for the nick you previously registered when you return to the IRC network.</span></div></li>
					</ul>
					<br />
				</div>
				<p>Step 4. Notes on SSL.</p>
				<br />
				<div class='irc'>
					<p>DarkScience is an SSL-only network. If you are running the XChat IRC client, you must check the option "Allow invalid SSL Certificates" as Darkscience uses CACert, which may or may not be included with your operating system. This may not be necessary if your operating system already comes with the CACert root certificate. View their inclusion status <a href="http://wiki.cacert.org/InclusionStatus">here</a>. Additionally, server-server links within the IRC network are encrypted with SSL as well, to prevent eavesdropping at all points in the network. Server public keys use at least 4096-bit public keys.</p>
				</div>
			</div>
			<div class='sec'>
				<h1>IRC Channels</h1>
				<h2></h2>
				<p>Official Channels:</p>
				<ul>
					<li class='pop'><code>#darkscience</code> -- DarkScience network community channel.</li>
					<li class='pop'><code>#sector5d</code> -- Sector5D community channel.</li>
					<li class='pop'><span><code>#drive-in</code> -- Playing movies every saturday night.</span></li>
					<li class='pop'><span><code>#IdleRPG</code> -- Idler RPG game channel.</span></li>
					<li class='pop'><span><code>#firehose</code> -- Syndicated news - tech, politics, and more.</span></li>
					<li><code>#vhost</code> -- Set up and activate custom hostmasks.</li>
					<li><code>#help</code> -- Network related help.</li>
				</ul>
				
				<br />
				<p>Other Groups:</p>
				<ul>
					<li><span><code>#netxs</code> -- NetXS Phreaking community.</span></li>
				</ul>
			
				<br />
				<p>*Popular channels are marked with a blue bullet.</p>
			</div>
			<div class='sec'>
				<h1>Source Code</h1>
				<h2></h2>
				<p>DarkScience releases the source code for the website.</p>
				<ul>
					<li class='pop'><span><a href='https://www.gitorious.org/darkscience-website'>DarkScience Website</a></span></li>
					<li class='pop'><span><a href='https://www.gitorious.org/darkscience-website/idlerpg_site'>IdleRPG Website</a></span></li>
					<li class='pop'><span><a href='https://github.com/kylef/paste'>Paste</a></span></li>
				</ul>
			</div>
			<div class='sec'>
				<h1>DarkScience Staff</h1>
				<h2></h2>
				<ul>
					<li class='pop'><span>Dijit - System Administrator - Arc | Global Administrator</span></li>
					<li class='pop'><span>kylef - SysOp - Amnesia | Network Administrator</span></li>
					<li class='pop'><span>dimonov - SysOp at Bitfield | Network Administrator</span></li>
					<li>Derecho - SysOp at Prorsus | Local Administrator</li>
					<li>Yusuke - The Ultimate Lurker | Consultant</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


