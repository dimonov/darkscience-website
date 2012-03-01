<?php
/* Stop include file being called directly */
$tmp=$_SERVER['SCRIPT_FILENAME'];
if (!preg_match("/\bupgrade.php\b/i", "$tmp") && !preg_match("/\bquotes.php\b/i", "$tmp")) {
die("Hacking Attempt");
}

include("lang_eng.php");

function htmltop(){
global $lang;
echo("

<center>

	<table cellpadding='2' cellspacing='0' width='80%' border='0'>
	<tr>
		<td align='center' height=15 colspan=2>
 			<a href='?random'><b>Random</b></a>
			/ <a href='?browse'>Browse</a>
			/ <a href='?latest'>Latest</a>
 			/ <a href='?top'>Top 25</a><a href='?top2'>-50</a> 
			/ <a href='?worst'>Worst</a>
			/ <a href='?add'><b>Add Quote</b></a>
 			/ <a href='?search'>Search</a> &nbsp;
		</td>

	</tr>
</table>
</center><p>
");
}

function htmlbottom(){
}
