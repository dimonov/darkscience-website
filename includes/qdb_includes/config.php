<?php
/***************************************************************************
 *   OSQDB, config.php
 *   (C) 2005 OSQDB Team, http://www.sourceforge.net/projects/osqdb/
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, write to the Free Software
 *   Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 ***************************************************************************/

/* Stop include file being called directly */
$tmp=$_SERVER['SCRIPT_FILENAME'];
if (!preg_match("/\bupgrade.php\b/i", "$tmp") && !preg_match("/\bquotes.php\b/i", "$tmp")) {
die("Hacking Attempt");
}

class SQL3 extends SQLite3
{
	function __construct()
	{
	$dbpath = "/var/www/html/SQL/q.sqlite3";
	$this->open($dbpath, SQLITE3_OPEN_READWRITE |
	SQLITE3_OPEN_CREATE);
	}
}
$dbc = new SQL3();
?>
