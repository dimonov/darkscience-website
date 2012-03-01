<!DOCTYPE html>
<html lang='en'>

<head>
<?php
$ds_title = "History";
include "./includes/head.inc.php";
?>
</head>

<body id='history'>

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

				<h1>History</h1>
				<h2></h2>
				<p>Some of our best efforts go to making sure
				this page is as accurate as possible.
				If you have any corrections,
				additions, or extra information we
				could add on this page, please <a
				href='./contact.php'>contact
				us</a>.</p>
				<br/>
				<p>DarkScience is a community derived from the old bluehell, founded by the most talented of the group, wanting to get away from the drama and influx of script kiddies.</p>
				<br/>
				<p>The DarkScience network went online in March of 2003 and has undergone many structural and cosmetic changes over the years, and we now participate in several new projects. The most attention goes to our IRC network, which is both populated and still growing.</p>
				<br/>
				<p>In Feburary of 2008 Planet-Sec IRC Network merged with DarkScience.  Planet-sec is a close knit group of like minded individuals that have a interest in security and programming, and are activly participating is various projects along with DarkScience.</p>
				<br/>
				<p>On April 2010, DarkScience linked
				with Wargaming, a small community of technology
				hobbyists.
				</p>
				<br/>
				<p>As with everything, DarkScience
				evolves and changes over time, and
				during mid-2011 we've had a change of
				staff for the betterment of the
				network. Which at that time, was
				almost dead, after so many years of
				faithful service. The new staff
				succeded in reviving the network.
				Which is now here to stay, just like it
				was meant to be, regardless
				of what anyone may think
				otherwise. We may have lost a lot of
				people in the process, but the
				network, and the community shall
				prevail.</p>
				<br/>
				<p>In january 2012, DarkScience merged
				with Sector5D, which is a friendly
				community of individuals with an
				interest in programmimng, system
				administration, gaming, and unix.</p>
				<br/>
				<p>We are also happily accepting new
				network links and affiliates. See the
				<a href='./faq.php'>FAQ</a> for more information on this.</p>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>


