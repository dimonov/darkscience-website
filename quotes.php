<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "Quote DB";
include "./includes/head.inc.php";
?>
</head>

<body id='qdb'>

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
		<?php
		include './includes/check_uagent.php';
			if (checkUagent() == false)
			include './includes/qdb_includes/index.php';
		?>
		</div>
	</div>
</div>
</body>
</html>
