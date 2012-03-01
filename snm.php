<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "SNM";
include "./includes/head.inc.php";
?>
</head>

<body id='snm'>

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
			<img class='center' src='images/snmg.gif' alt='saturday night movie' /><br />
			<div class='sec'>
				<h1>Saturday Night Movie</h1>
				<h2></h2>
				<p>The SNM is hosted on Saturdays at 00:00 GMT, please join <a><b>#drive-in</b></a> on the irc to talk to like minded cinephiles.</p>
				<p>Generally the streaming is a double feature, Suggestions are always open until Friday at 17:00 GMT (the day before the show begins).</p><br />
				<p>We remind Darkscientists that you must have a registered nick to be able to gain access to the stream. :) -- Thanks, and Enjoy.</p>
			</div>
			<div class='sec'>
				<h1>How to Join</h1>
				<h2></h2>
				<p>We recommend VLC: it's cross platform and easy to use and consistent.</p><br />
				<video class='center' controls='controls'>
					<source src='./tutorials/snm/vlc.ogg' type='video/ogg' />
					Your browser does not support the video element.<br />
					For a video of how to connect (in ogg format) please click <a href='./tutorials/snm/vlc.ogg'>here</a>
				</video>
                         </div>
		</div>
	</div>
</body>
</html>


