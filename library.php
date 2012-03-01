<?php
include './includes/libindex0r.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Library";
include "./includes/head.inc.php";
?>
</head>

<body id='library'>

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
				<h1>Library</h1>
				<h2></h2>
				<p>This page contains papers and documents that we consider useful or interesting, ranging from topics like computer architecture / engineering to computer security and exploitation. We currently accept papers which are academic, and / or research oriented.</p>
				<br />
			</div>
					<div class='lib'>
					<?php
					$index0r = new index0r;
					$index0r->init();
					?>
					</div>
		</div>
</body>
</html>


