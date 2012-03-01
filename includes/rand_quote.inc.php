<?php
	function quote() {
		// max per quote: 4 lines, 50 chars per line
		$q[] = "- composed of diamonds and win";
		$q[] = "* This is madness.. ";
		$q[] = "<elchupathingy> zref: im adding faggosity to my bank of awesome words";
		$q[] = "* epoch waits for the the fail-log to show up on google...";
		$q[] = "<epoch> ... you're pulling my leg... right?";
		$q[] = "<ElectRo`> STRIPE ALL THE THINGS";
		$q[] = "<Dez> You Xchat lover you!";
		$q[] = "<jeremy_>  The Cult of Job's OS";
		$q[] = "<fiftysixer> some dipshit named the main web server \"ass\"";
		$q[] = "<epoch> Gah. I hope PDFs don't become the standard format for people to write documents in.";
		$q[] = "<fiftysixer> i'm just waiting for someone to ask who root@ass is >.<";
		$q[] = "<elchupathingy> don't worry i'll /de-op everyone and cause havoc just u wait";
		$q[] = "<Dijit> I just split with my girlfriend because of a bag of £1 candies";
		$q[] = "<zref> it's 18:14 EDT <ninjitsu> military 4nr time >.<";
		$q[] = "<dimonov> maybe a command like dd if=/dev/hdd|bzip2 -|ssh my@box \"cat - > ~/image.bz2\"";
		$q[] = "<dimonov>  All your space junk are belong to NASA";
		$q[] = "<dimonov> gcc's optimizations add integer overflows to SafeInt http://blog.regehr.org/archives/593";
/*		$q[] = "<dimonov> Oh wow, gcc's optimizations add integer overflows to SafeInt. http://blog.regehr.org/archives/593";*/
		$q[] = "<dimonov> .-.";
		$q[] = "<Dijit> installing the bajillion updates on my laptop";
		$q[] = "<Dijit> (with -O3 -funloops)";
		$q[] = "<Dijit> Cloud is just another buzzword";
		$q[] = "<epoch> \"ZOMG LOOK AT ME I CAN USE PRETTY FONTS AND COLORS AND SHIT\"";
		$q[] = "<fiftysixer> using wordpress, so cms development is really fast";
		/*$q[] = "<fiftysixer> using wordpress, so cms development is really fast (actually, ripping off the cms i made for irl job :p)";*/
		$q[] = "<aadster>  <3";
		$q[] = "<dimonov> ssh root@192.* ? <Shawn> Connection refused.";
		$q[] = "<Dijit> my mom can webdev";
		$q[] = "<Dijit> DICK <Dijit> >finds errors, fixes one. <Dijit> >says fuck it <Dijit> >sleeps";

		$idx = rand(0,count($q)-1);

		$str = $q[$idx];
		$str = htmlspecialchars($str);
		$str = str_replace("\n", "<br>", $str);

		return $str;
	}
?>
