<?php
include './includes/status.inc.php';
$count = 0;
$nservers = count($ircserver) - 1; 
?>
<!DOCTYPE html>
<html lang='en'>

<head>
        <title>DarkScience >> Status</title>
        <meta http-equiv='content-type' content='text/html; charset=utf-8' />
        <link rel='shortcut icon' href='./images/favicon.ico' type='image/x-icon' />
        <link rel='stylesheet' href='./stylesheet.css' type='text/css' media='screen' />
</head>

<body id='status'>

	<div id='container'>
		<div id='header'>
			<a href='./' id='logo'></a>
		</div>
		<?php
		include './includes/nav.inc.php';
		?>

		<div id='main'>
			<div class='sec'>
				<h1>IRC Status</h1>
				<h2></h2>
				<?php
				printf("<p>We have %s including services. The statistics below don't include services.</p>\n",
					str_replace("average", "and an average of", $extra));
				?>
				<br />
				<table cellspacing='0' cellpadding='0' class='status left'>
					<tr class='bold'>
						<td class='top' colspan='4'><h1>Network Status</h1><h2></h2></td>
					</tr>
					<tr class='bold'>
						<td class='border border2'>&nbsp;</td>
						<td class='border'>Current</td>
						<td class='border'>Max</td>
					</tr>
					<tr>
						<td class='left'>Users</td>
					<?php
						$nusers = 0;
						for ($count = 0; $count <= $nservers; $count++)
						{
							if (!($ircserver[$count] == "services.darkscience.ws"))
							$nusers += $usercount[$count];
						}
						printf("<td>%d</td>\n<td>%d<td>", $nusers, ($nusers * 2) + 1);
					?>
					</tr>
					<tr class='alt'>
						<td class='left'>Channels</td>
						<td>12</td>
						<td>17</td>
					</tr>
					<tr>
						<td class='left'>Opers</td>
						<td>4</td>
						<td>4</td>
					</tr>
					<tr class='alt'>
						<td class='left'>Servers</td>
						<td><?php echo $nservers; ?></td>
						<td><?php echo $nservers; ?></td>
					</tr>
				</table>
				<table cellspacing='0' cellpadding='0' class='status'>
					<tr class='bold'>
						<td class='top' colspan='4'><h1>Server List</h1><h2></h2></td>
					</tr>
					<tr class='bold'>
						<td class='border border2'>Server</td>
						<td class='border'>Users</td>
						<td class='border'>Percent</td>
						<td class='border'>Status</td>
					</tr>

				<?
				$c = 0;
				for ($count = 0; $count <= $nservers; $count++)
				{
					if (!($ircserver[$count] == "services.darkscience.ws"))
					{
					$c++;
					printf("<tr%s", ($c & 1) ? ">\n" : " class=\"alt\">\n");
					printf("<td class='left'>%s</td>\n", $ircserver[$count]);
					printf("<td>%d</td>\n", $usercount[$count]);
					printf("<td>%s</td>\n", $upercent[$count]);
					printf("<td class='running'>Online</td>\n");
					printf("</tr>\n");
					}
				}
				?>

				</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>


