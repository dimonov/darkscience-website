<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Articles";
include "./includes/head.inc.php";
?>
</head>

<body id='articles'>

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
				<h1>Articles</h1>
				<h2></h2>
				<p>We are actively seeking content submissions and suggestions that cover any topic of interest to the DarkScience network, and any community there-in. We'd love to hear from you. Please <a href='./contact.php'>contact us</a> if you are interested.</p>
				<br />
				<ul class='column'>
					<li><a>BBS</a></li>
					<li><a>RCE</a></li>
					<li><a>Phreaking</a></li>
					<li><a>Politics</a></li>
					<li><a>Privacy</a></li>
				</ul>
				<ul>
					<li><a>Programming</a></li>
					<li><a>Security</a></li>
					<li><a>Stories</a></li>
					<li><a>Tech News</a></li>
					<li><a>Unix/Linux</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>


