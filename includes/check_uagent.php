<?php

function checkUagent() {
$cntU = 0;
$blocked_uagents = array("google", "alexa", "yandex", "baidu", "archive", 
	"bot", "seo", "crawl", "spider", "yahoo", "msn", "wget");

	foreach ($blocked_uagents as $bk)
	{
	$cntU += stripos($_SERVER['HTTP_USER_AGENT'], $bk);
	}
return ($cntU > 0)? true : false;
}

?>
