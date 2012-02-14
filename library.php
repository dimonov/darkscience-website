<?php
include './includes/libindex0r.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
        <title>DarkScience >> Library</title>
        <meta http-equiv='content-type' content='text/html; charset=utf-8' />
        <link rel='shortcut icon' href='./images/favicon.ico' type='image/x-icon' />
        <link rel='stylesheet' href='./stylesheet.css' type='text/css' media='screen' />
</head>

<body id='library'>

	<div id='container'>
		<div id='header'>
			<a href='./' id='logo'></a>
		</div>
		<?php
		include './includes/nav.inc.php';
		?>
		<div id='main'>
			<div class='sec'>
				<h1>Library</h1>
				<h2></h2>
				<p>This page contains papers and documents that we consider useful or interesting, ranging from topics like computer architecture / engineering to computer security and exploitation.</p>
				<br />
			</div>
					<div class='main'>
					<?php
					$index0r = new index0r;
					$index0r->init();
					?>
					</div>
		</div>
</body>
</html>


