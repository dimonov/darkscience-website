<?php
//error_reporting(E_ALL); // Clean up this mess

define('INDEX0RVERSION', '1.0');
/*	DOCUMENTATION
	
	Project Name:	index0r
	Version:		1.0;
	Modified:		9/12/2011 3:30 AM
	Author:			Phillip Metzger (phillip@0zz.org) (http://0zz.org/)

	TODO
	
	+ Small, Medium, Large thumbnail option
	+ Make index0r handle .php files nicely
	+ Clean up code
	+ Some variables are called twice. Why??
	+ Standardize CSS names and remove all style="" attributes so all CSS properties are applied via the head's <style>
	+ Add swf icons
		
	CHANGELOG
	1.0
	* Added audio player for mp3 files
	* Added settings for toggling the thumbnail and audio player features
	* Added flash file type and icon
	* Added image viewer
	
	0.9.9 9/11/2011 5:20 PM
	* Refined comments and removed extra lines so the code is easier to read and better formatted
	* Re-tabbed all the code, so it's perfectly nested.
	* Removed periods from file type names
	* Added PNG thumbnail support
	* Fixed a bug where images with the extension .jpeg would not display thumbnails
	* Fixed a bug where the wrong error message would show. Because index0rFailedMsg was not used in the class
	
	0.9.7
	* fixed some icons
	* fixed some garbage code
	* I'm bringing this code back from the dead.


	INSTALLATION INSTRUCTIONS

	1. Extract everything in to the root directory you want to list.
	2. Modify configurations

	CSS
     	- Alternating row classes:
			.alt_row1
			.alt_row2
		- if html="on" style is manually created. Other wise it must be specified manually.
		
		List CSS class names
			.index0rLink
			.index0rPathLink
			.index0rP
			.index0rH4
			.index0rH2
			.index0rTable
			
*/
/* SETTINGS */
	// Generate <html> <head> <title> <body> tags. Turn off if index0r is embeded.
	define("index0rHTML", 'off'); // on/off
	
	// Show image thumbnails
	define("index0rImageThumbs", 'on'); // on/off
	
	// Use prettyPhoto module. The prettyPhoto is the AJAX image viewer.
	define("index0rPrettyPhoto", 'off'); // on/off
	
	// Show audio player: Requires JavaScript, Flash and utilizes JWPlayer
	define("index0rAudioPlayer", 'on'); // on/off
	
	// Web page title before path
	define("index0rHTMLTitle", "Index of ");
	
	// This is the name of the root directory link.
	define("index0rIndexTitle", 'Index');
	
	// Width of <table>
//	define("index0rTableWidth", '50%');
	define("index0rTableWidth", '500%');
	
	// Display working path and debug info. Turn this off when public
	define("index0rDebug", 'off'); // on/off
	
	// Path to directory
	// Example: '/www/data/docs/user.com/public' or '.' (Without quotes)
	// Use forward slashes ALL PLATFORMS
	// NO trailing slash
//	define("index0rDirectoryRoot", '.');
	define("index0rDirectoryRoot", '/var/www/html/darkscience.ws/files');
	
	// Homepage URL
	// Example 1: :http://domain.com/directory
	// Example 2: http://domain.com/directory/index0r.php
	// NO trailing slash
//	define("index0rHomepage", '.');
	define("index0rHomepage", 'http://darkscience.ws/library.php');
	
	// If homepage and url to file are different. Exmple: homepage is
	// http://user.com/public/files but directory_root is //user.com/downloads
	// if directory root and homepage are the same file_url should be the same as
	// homepage.
	// NO trailing slash
	define("index0rFileUrl", 'http://darkscience.ws/files');
	
	// http path to index0r_lib
	define("index0rLibPath", './index0r_lib');
	
	// http path to images
	define("index0rImgSrc", index0rLibPath.'/index0r_img');
	
	// Alternating row color;
	define("index0rAltColor", 'on'); // Toggle feature on/off
	define("index0rAltColor1", '#F2F2F2');
	define("index0rAltColor2", '#E6E6E6');
	
	// List directories first before listing files
	define("index0rOrder", 'on'); // Toggle feature on/off
	
	// Blacklist file names and directories so they will not be listed
	$index0rBlacklist = Array(
						".",
						"..",
						"index.php",
						"index.htm",
						"index.html",
						"index0r_img",
						"index0r_lib",
						".htaccess",
						".htpasswd",
						".plan",
						"_notes"
                       );
	// Error message when directory has failed to open or the directory is empty
	define("index0rFailedMsg", "Not found or directory is empty.");
	
	// Chop the name at XX length
	define("index0rMaxLength", 15);
	
	// Date format - Modified date is displayed using the date() function
	// http://php.net/manual/en/function.date.php
	define("index0rDateFormat", "F d, Y<\b\\r />\a\\t h:i:s");
	
	// File type icon list
	$index0rFileTypes = Array(
						'dir' => 'directory.png',
						'jpg' => 'image.png',
						'jpeg' => 'image.png',
						'gif' => 'image.png',
						'png' => 'image.png',
						'exe' => 'binary.png',
						'txt' => 'text.png',
						'zip' => 'archive.png',
						'rar' => 'rar.gif',
						'gz' => 'archive.png',
						'tar' => 'archive.png',
						'htm' => 'html.png',
						'html' => 'html.png',
						'php' => 'php.png',
						'css' => 'text.png',
						'iso' => 'iso.png',
						'rpm' => 'rpm.png',
						'pdf' => 'adobe_pdf.png',
						'xls' => 'excel.png',
						'wmv' => 'video.png',
						'wav' => 'video.png',
						'asf' => 'video.png',
						'mpg' => 'video.png',
						'mov' => 'video.png',
						'ini' => 'text.png',
						'psd' => 'psd.png',
						'plan' => 'plan.png',
						'mp3' => 'mp3.gif',
						'bat' => 'bat.gif',
						'avi' => 'video.png',
						'md5' => 'key.gif',
						'asc' => 'key.gif',
						'cpp' => 'c.gif',
						'c' => 'c.gif',
						'py' => 'py.gif',
						'js' => 'js.gif',
						'flv' => 'flash.gif',
						'swf' => 'flash.gif',
						'psp' => 'psp.gif'
					);

/* END SETTINGS */




/* WARNING: CHANGES BELOW THIS LINE MAY BREAK Index0r. */

// Index0r calls upon itself to generate thumbnail of images.
if(isset($_GET['thumb'])) {
	//createThumbnail($_GET['thumb'], 100, 80, 1);
	createThumbnail($_GET['thumb'], 175, 175, 1);
	exit;
}

// Print audio player
function print_audio_player($file) {
	$id = md5(rand(11111,999));
	
	$str .= "<script type='text/javascript' src='". index0rLibPath ."/audio_player/jwplayer.js'></script>
 
<div id='mediaspace_". $id ."'>This text will be replaced</div>
 
<script type='text/javascript'>
  jwplayer('mediaspace_". $id ."').setup({
    'flashplayer': '".index0rLibPath ."/audio_player/player.swf',
    'file': '". $file ."',
    'controlbar': 'bottom',
	'shownavigation': 'false',
    'width': '205',
    'height': '24'
  });
</script>";

	return $str;
	
}

// This function makes thumbnails when index0r calls upon itself to do so.
// createThumbnail() is not part of the index0r class.
function createThumbnail($path, $width, $height, $porp = 1) {
	$file_extension = strtolower(substr(strrchr($path, "."), 1));
	
	if(preg_match("%jpg|jpeg%i", $file_extension)) {
		$src = imagecreatefromjpeg($path);
	}
	if(preg_match("%gif%i", $file_extension)) {
		$src = imagecreatefromgif($path);
	}
	if(preg_match("%png%i", $file_extension)) {
		$src = imagecreatefrompng($path);
	}
	$srcx = imageSX($src);
	$srcy = imageSY($src);
	
	if($porp == 1) {
		if ($srcx < $srcy) {
			$width = floor(($height / $srcy) * $srcx);
			$thumbWidth = $width;
			$thumbHeight = $height;
		} else {
			$height = floor(($width / $srcx) * $srcy);
			$thumbWidth = $width;
			$thumbHeight = $height;
		}
	} else {
		$thumbWidth = $width;
		$thumbHeight = $height;
	}
	
	$copy = imageCreateTrueColor($thumbWidth, $thumbHeight);
	$thumb = imageCopyResampled($copy, $src, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $srcx, $srcy);
	
	if(preg_match("%jpg|jpeg%i", $path)) {
		header("Content-Type: image/jpeg");
		$tempThumb = imageJPEG($copy);
	}
	if(preg_match("%gif%i", $path)) {
		header("Content-Type: image/gif");
		$tempThumb = imageGIF($copy);
	}
	if(preg_match("%png%i", $path)) {
		header("Content-Type: image/png");
		$tempThumb = imagePNG($copy);
	}
	
	imageDestroy($src);
	imageDestroy($tempThumb);
	imageDestroy($copy);

} // END createThumbnail()

/* index0r



		 _           _              ______       
		(_)         | |            / __   |      
		 _ ____   _ | | ____ _   _| | //| | ____ 
		| |  _ \ / || |/ _  | \ / ) |// | |/ ___)
		| | | | ( (_| ( (/ / ) X (|  /__| | |    
		|_|_| |_|\____|\____|_/ \_)\_____/|_|    


		9/12/2011 3:26 AM

		Hi, Welcome to the index0r class.

		The index0r class opens a defined directory and prints the contents
		in a <table>.

		It descends into sub-diretories collecting file information and 
		puts all the infomation into an array called $contents.

		$contents is sorted, chopped and slice and diced before printed
		on the screen.


		HOW TO:

			Embed Index0r
			At the very bottom of this file is 
	
				$index0r = new index0r;
				$index0r->init();

			Use this code to execute index0r.
	
			If you are including("/index0r/index.php") into another PHP file then delete the
			preformentioned lines.








		Sincerely,


		Phillip Metzger
		(480) 258-4992
		phillip@0zz.org
		http://0zz.org/



		*/
class index0r {
	var $html;
	var $debug;
	var $directory_root;
	var $homepage;
	var $file_url;
	var $img_src;
	var $blacklist;
	var $failed_msg;
	var $max_length;
	var $date_format;
	var $file_types;
	var $alt_color;
	var $alt_color_one;
	var $alt_color_two;
	var $order;
	var $table_width;

	var $root_dir;
	var $current_dir;
	var $path;
	var $clean_path;
	var $dir_string;
	var $file_count;

	function index0r () {
		global $index0rSettings, $index0rBlacklist, $index0rFileTypes;

		$this->html				= index0rHTML;
		$this->table_width		= index0rTableWidth;
		$this->debug			= index0rDebug;
		$this->directory_root	= index0rDirectoryRoot;
		$this->homepage			= index0rHomepage;
		$this->file_url			= index0rFileUrl;
		$this->img_src			= index0rImgSrc;
		$this->alt_color		= index0rAltColor;
		$this->alt_color_one	= index0rAltColor1;
		$this->alt_color_two	= index0rAltColor2;
		$this->order			= index0rOrder;
		$this->blacklist		= $index0rBlacklist;
		$this->failed_msg		= index0rFailedMsg;
		$this->max_length		= index0rMaxLength;
		$this->date_format		= index0rDateFormat;
		$this->file_types		= $index0rFileTypes;
		$this->index0rAudioPlayer	= index0rAudioPlayer;
		$this->index0rImageThumbs	= index0rImageThumbs;
		$this->index0rPrettyPhoto	= index0rPrettyPhoto;
		
		// Advanced Settings
		$this->settings				= $index0rSettings;
		$this->file_count = 0;

	}
	
	/* Initialize Index0r
	
	
	
	
	This is where the class functions start.
	
	The Index0r class is executed by calling the function init().
	
		$index0r = new index0r;
		$index0r->init();
	
	
	
	
	
	*/

	/* init() function
	
	This function does kick starts and finishes the Index0r.
	
	*/
	function init () {
		$this->root_dir = $this->find_root_dir();
		
		if($this->xss_f(isset($_GET['dir']))) {
			$this->dir_string = $this->xss_f($_GET['dir']);
		} else {
			$this->dir_string = '';
		}

		// calculate path
		if($this->xss_f(isset($_GET['dir']))) {
			$this->path = $this->directory_root . $this->xss_f($_GET['dir']);
		} else {
			$this->path = $this->directory_root;
		}
		
		$this->clean_path = $this->validate_path($this->path);

		// current path excluding directory_root
		if($this->xss_f(isset($_GET['dir'])) && ($this->xss_f(isset($_GET['dir']))) != "") {
			$this->current_dir = $this->root_dir . $this->xss_f($_GET['dir']);
		} else {
			$this->current_dir = $this->root_dir;
		}
		
		//all the stuff in the directory is thrown into the array
		$contents = Array();
		$contents = $this->directory_array();
		
		// if index0rHTML is turned on then Print HTML
		$i = 1;

		if($this->html == "on") {
			print "<!DOCTYPE html>\n";
			print "<html>\n";
				print "<head>\n";
					print "<title>". index0rHTMLTitle;
					print (($this->path == ".") ? "Index" : $this->path);
					print "</title>\n";
					print "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\" />\n";
					print "<style type=\"text/css\">\n";
					print "html,body { font-family: verdana; background: #FFF; } \n";
					print ".index0rLink { text-decoration: none; color: #000066; font-size: 15px } \n";
					print ".index0rLink:hover { text-decoration: underline; } \n";
					print ".index0rPathLink { color: #003366; font-size: 24px } \n";
					print ".index0rP { font-size: 12px } \n";
					print ".index0rH4 { font-size: 15px !important; } \n";
					print ".index0rH2 sup { font-size: 10px; } \n";
					print ".index0rTable td { font-size: 10px; padding: 15px; border-top: 1px solid #ccc; } \n";
					print ".index0rTable th { text-align: left; font-size: 15px; border-bottom: 1px solid #ccc; } \n";
					print ".alt_row1 { background: ". $this->alt_color_one ."; } \n";
					print ".alt_row2 { background: ". $this->alt_color_two ."; } \n";
					print "img { border: 0; } ";
					print "</style>\n";
					print '<script src="'.index0rLibPath.'/jquery-1.6.3.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="'.index0rLibPath.'/image_viewer/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="'.index0rLibPath.'/image_viewer/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>';
				print "</head>\n";
				print "<body>\n";
		} // END html

		// If index0rDebug is on then print debug infomation
		if($this->debug == "on") {
			print "\t\t<p id=\"debugControl\"><a href=\"#\" onclick=\"getElementById('debug').style.visibility='visible';"
				. "getElementById('debug').style.height='auto'; getElementById('debug').style.overflow='auto';"
				. "getElementById('debugControl').innerHTML=''; \">Show Debug</a><div id=\"debug\""
				. " style=\"visibility: hidden; height: 0px; overflow: hidden\";><p class=\"index0rP\">Attempting to open: " . $this->clean_path ."<br /></p>\n\n";
			print "\t\t<ul>\n"
				."\t\t<li>Index0r Version ". INDEX0RVERSION ."</li>"
				."\t\t<li>\$this->html: ". $this->html ."</li>"
				."\t\t<li>\$this->debug: ". $this->debug ."</li>"
				."\t\t<li>\$this->path: ". $this->path ."</li>"
				."\t\t<li>\$this->clean_path: ". $this->clean_path ."</li>"
				."\t\t<li>\$this->file_url: ". $this->file_url ."</li>"
				."\t\t<li>\$this->directory_root: ". $this->directory_root ."</li>"
				."\t\t<li>\$this->homepage: ". $this->homepage ."</li>"
				."\t\t<li>\$this->img_src: ". $this->img_src ."</li>"
				."\t\t<li>\$this->order: ". $this->order ."</li>"
				."\t\t<li>\$this->blacklist: <br />";

				// Print blacklist array
				foreach($this->blacklist as $key => $value) {
					print "\t\t<span style=\"color: red\">".$value."</span>\n<br />";
				}
				// Print file types array
				print "</li>"
				."\t\t<li>\$this->file_types: <br />";
				foreach($this->file_types as $key => $value) {
					print "\t\t<span style=\"color: red\">".$key." - ".$value."</span>\n<br />";
				}
				print "</li>";
				print "</ul></div>";
		} // END debug
		
		// Print Index0r version
		print "<!-- Index0r Version ". INDEX0RVERSION ." -->\n\r";
		
		// Print link to homepage and file count
		print "\t\t<h2 class=\"index0rH2\">" . $this->slice_and_dice() . " <sup>" . $this->file_count . "</sup>".$shadow_image."</h2>\n";
		
		// Print the back button if the current directory is not the root directory
		if($this->current_dir != '.') {
			$back_button = "<img src=\"".$this->img_src."/back.png\" alt=\"^\" />";
			print "\t\t<h4 class=\"index0rH4\"><a href=\"" . $this->homepage ."?dir=" . $this->parent_directory()
			. "\" title=\"Parent Directory\" class=\"index0rLink\">" . $back_button . " Back</a></h4>\n\n";
		}
		
		// If contents array is full of love, files and directories then print the table
		if($contents != FALSE) {
			
			// Print table
			print "\t\t<table cellpadding=\"3\" cellspacing=\"0\" border=\"0\" width=\"" . $this->table_width . "\" class=\"index0rTable\">\n";

			// Print table header
			print "\t\t<tr>"
			. "\t\t\t<th><a href=\"".$this->order_parse("name")."\" tile=\"Name\" class=\"index0rLink\">Name</a></th>\n"
			. "\t\t\t<th><a href=\"".$this->order_parse("type")."\" tile=\"Type\" class=\"index0rLink\">Type</a></th>\n"
			. "\t\t\t<th><a href=\"".$this->order_parse("details")."\" tile=\"Size\" class=\"index0rLink\">Size</a></th>\n"
			. "\t\t\t<th></th>\n"
			. "\t\t\t<th><a href=\"".$this->order_parse("mod_date")."\" tile=\"Last Modified\" class=\"index0rLink\">Last Modified</a></th>\n"
			. "\t\t</tr>\n";
			
			/* Print file or directory row
			
			
			
			
			This is where index0r calls print_file(name,type,details,mod_date)
			which prints the entire contents array.
			
			
			
			
			*/
			foreach($contents as $key => $value) {
				print $this->print_file($value['name'], $value['type'], $value['details'], $i, $value['mod_date']);
				$i++;
			}

			// End Table
			print "\t\t</table>\n";

			} else {
	
				// If the directory is empty print this error message. Technically if contents array is empty this prints.
				print "\t\t<h4 class=\"index0rError\">" . $this->failed_msg . "</h4>\n";
			}
			
			// Obvious what this does
			if($this->html == "on") {
				print '<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^=\'prettyPhoto\']").prettyPhoto();
  });
</script>';
				print "\t</body>\n";
				print "</html>\n";
			}
		} // END contents
		
		
		/* Support functions
		
		
		
		Down here is where all the support functions for sorting, chopping,
		slicing dicing are located.
		
		
		
		
		*/
		
		// Determine sorting options and create the order query string for links
		function order_parse($col_name, $opt_link = 1) {
			$string = '<a href="';
			$string .= $this->homepage .'?dir=' . $this->dir_string;
			$string .= '" title="'. $col_name .'" class="index0rLink">';
			$string .= '</a>';

			$column_array   = Array();
			$column_array[] = "name";
			$column_array[] = "details";
			$column_array[] = "type";
			$column_array[] = "mod_date";
			
			switch ($col_name) {
				case 'name':
					$sort = ($this->xss_f($_GET['s']) == 'ASC' && $this->xss_f($_GET['c']) == $col_name) ? 'DESC' : 'ASC';
					$order_string = '&amp;s=' . $sort;
					$order_string .= '&amp;c=name';
					break;
				case 'type':
					$sort = ($this->xss_f($_GET['s']) == 'ASC' && $this->xss_f($_GET['c']) == $col_name) ? 'DESC' : 'ASC';
					$order_string = '&amp;s=' . $sort;
					$order_string .= '&amp;c=type';
					break;
				case 'details':
					$sort = ($this->xss_f($_GET['s']) == 'ASC' && $this->xss_f($_GET['c']) == $col_name) ? 'DESC' : 'ASC';
					$order_string = '&amp;s=' . $sort;
					$order_string .= '&amp;c=details';
					break;
				case 'mod_date':
					$sort = ($this->xss_f($_GET['s']) == 'ASC' && $this->xss_f($_GET['c']) == $col_name) ? 'DESC' : 'ASC';
					$order_string = '&amp;s=' . $sort;
					$order_string .= '&amp;c=mod_date';
				break;
			}
			
			$string = $this->homepage .'?dir=' . $this->dir_string . $order_string;

			$sort_col = $this->xss_f($_GET['c']);

			$result = ($opt_link == 1) ? $string : $sort_col;


			return $result;

		} // END order_parse


		// I am at an intersection of two planes intersecting at an intersection...
		function human_file_size($size)
		{
			if(!($size <= 0)){
				$filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
				return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i];
			}
		}

		// Search the file type array and display the right icon file string. This function should be called file_icon() or similar.
		function file_image($file) {
			$image = "/";

			if(is_dir($file)) {
				$image .= $this->file_types['dir'];
			} else {
				$position = strrpos($file, ".");
				$extension = substr($file, ($position+1));
				$extension = strtolower($extension);
				if(array_key_exists($extension, $this->file_types))
				{
					$image .= $this->file_types[$extension];
				} else {
					$image .= "unknown.gif";
				}
			}

			return $image;
		} // END file_image

		function find_root_dir () {
			$position = strrpos($this->directory_root, "/");
			$this->root_dir = substr($this->directory_root, $position);

			return $this->root_dir;
		}
		
		// Determine if the file is an image. This function should be called is_image() or similar.
		function get_file_ext($filename) {
			$ext = strtolower(substr(strrchr($filename, "."), 1));

			if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png") {
				return true;
			} else {
				return false;
			}
		}
		
		// Determine if file is an audio file
		function is_audio($filename) {
			$ext = strtolower(substr(strrchr($filename, "."), 1));
				if($ext == "mp3" || $ext == "ogg" || $ext == "wav" || $ext == "wma") {
					return true;
				} else {
					return false;
				}
		}
		
		// This adds a html comment <!-- --> to the source code
		function file_comment($file, $type, $details) {
			$string = "\n\n\t\t<!--\n"
			. "\t\tFILE: ". strtoupper($file) ."\n"
			. "\t\tTYPE: ". strtoupper($type) ."\n"
			. "\t\tDETAILS: ". strtoupper($details) ."\n"
			. "\t\t-->\n";

			return $string;
		}

		/* print_file()
		
		
		
		
		This function is responsible for printing table rows. Everything from <td> to </td>
		
		print_file() makes a string called $row and returns its value at the end of the function.
		
		
		Table columns:
		NAME  |  TYPE  | SIZE  | THUMBNAIL  |  MODIFICATION DATE
		

		
		
		 */
		function print_file ($file, $type, $details, $i, $mod_date) {

			if($i % 2) {
				$alt_class = "alt_row1";
			} else {
				$alt_class = "alt_row2";
			}
			if($this->alt_color == "on") {
				$row = $this->file_comment($this->validate_name($file, $this->max_length), $type, $details)
				. "\t\t<tr class=\"" . $alt_class . "\">\n";
			} else {
				$row = $this->file_comment($this->validate_name($file, $this->max_length), $type, $details)
				. "\t\t<tr>\n";
			}

		// If the row is a directory then print a directory row
		if(is_dir($this->path . "/" . $file)) {
			// 1 Directory icon
			$row .= "\t\t\t<td>"
			. '<img src="' . $this->img_src ."/"
			. $this->file_image(($this->path . "/". $file), $this->file_types)
			. '" alt="" /> '

			// 2 Link
			. ' <a href="'. $this->homepage . '?dir=' . $this->dir_string . '/'
			. $file . '" class="index0rLink">'
			. $this->validate_name($file, $this->max_length) . "</a> <span>(". $type ." Files)</span></td>\n"

			// 3 Type
			. "\t\t\t<td></td>\n"

			// 4 Size
			. "\t\t\t<td nowrap=\"nowrap\">" . $this->human_file_size($details) . "</td>\n"

			// 5 Nothing
			. "\t\t\t<td></td>\n"

			// 6 Modification Date
			  . "\t\t\t<td style=\"text-align: center;\">" . date($this->date_format, $mod_date) . "</td>\n";
		} else {
			// PRINT FILE

			// 1 File icon
			$row .= "\t\t\t<td>"
			. "<img src=\"" . $this->img_src . $this->file_image(($this->path
			. $file), $this->file_types) . "\" alt=\"\" /> "

			// 2 Link
			. "<a href=\"" . $this->file_url . $this->dir_string . "/"
			. rawurlencode($file) . '" class="index0rLink">'
			. $this->validate_name($file, $this->max_length) . "</a></td>\n"

			// 3 Type
			. "\t\t\t<td>" . $type . "</td>\n"

			// 4 Size
			. "\t\t\t<td nowrap=\"nowrap\">" . $this->human_file_size($details) . "</td>\n";

			// 5 Media
			$row .= "\t\t\t<td>";
			
			// Thumbnail
			if($this->get_file_ext($file) == true && $this->index0rImageThumbs == 'on') {
				$row .= "<a href=\"" . $this->file_url . $this->dir_string . "/"
				. rawurlencode($file) . "\"";
				if(index0rPrettyPhoto == 'on') {
					$row .= "rel=\"prettyPhoto\"";
				}
				$row .= "title=\"" . $file . "\"><img src=\"?thumb=". $this->clean_path . "/" . $file ."\"  alt=\"" . $file ."\" /></a>";
			}
			
			// Audio player
			if($this->is_audio($file) == true && $this->index0rAudioPlayer == 'on') {
				$row .= print_audio_player(($this->file_url . $this->dir_string . "/". rawurlencode($file)));
			}
			$row .= "</td>\n";

			// 6 Modification Date
			$row .= "\t\t\t<td style=\"text-align: center;\">" . date($this->date_format, $mod_date) . "</td>\n";
			}
		$row .= "\t\t</tr>\n";

		return $row;
	} // END if (is directory)

	function parent_directory() {

		// Remove root_dir from current_dir
		$root_length = strlen($this->root_dir);
		$parent = substr($this->current_dir, $root_length);

		// Remove the last dir in path (ie: /dir/dir1 to /dir)
		$position = strrpos($parent, "/");
		$parent = substr($parent, 0, $position);
		
		return  $parent;
	}

	/* slice_and_dice()
	
	This is an important function. slice_and_dice() cuts up the path string
	into pieces and places them into a string as directory names and html links. 
	
	*/
	function slice_and_dice () {
		$str = $this->current_dir;
		// slice up the directory path and add links
		$cheese = "<a href=\"" . $this->homepage . "?dir=\" class=\"index0rPathLink\">Index</a>";
		$directory_stack = "";

		// remove root dir
		$length = strlen($this->root_dir);
		$str = substr($str, $length);
		$str = explode("/", $str);

		foreach($str as $key => $value) {
			if($value != "") {
				$value = "/" . $value;
				$cheese .= " <a href=\"" . $this->homepage . "?dir=" . $directory_stack.$value . "\" class=\"index0rPathLink\">" . $value . "</a>";
				$directory_stack .= $value;
			}
		}

		return $cheese;
	}

	// Validate file and directory names. This function also chops off file extensions.
	function validate_name ($str) {
		
		// String length
		$string_length = strlen($str);
		
		// Get the file extension length
		$offset = strlen(strrchr($str, '.'));
		
		// Remove the extension string length from the original string
		$str = substr($str, 0, ($string_length-$offset));

		if(strlen($str) > $this->max_length) {
			$str = substr($str, 0, $this->max_length);
			$str .= "...";
		}
		return $str;
	}
	
	// Validate path
	function validate_path($str) {
		// security function, remove any "/.." to prevent recursive browsing of directories.

		$random_tack = uniqid(rand(), true);

		$pattern[] = '%[\.]{2,}%is';
		$replacement = $random_tack;

		$clean_path = preg_replace($pattern, $replacement, $str);

		return $clean_path;
	}


	// Get File Type
	// Returns File type string
	function mimetype($file) {
   
		$string = strtolower(substr(strrchr($file, "."), 1));

		return $string;
	}

	/* directory_array()
	
	
	This is a complicated function that calls on itself to
	creating and returning the value of the almighty $contents array.
	
	
	*/
	function directory_array() {
		$file_array = Array(); // Holds files
		$dir_array = Array();  // Holds directories

		// Open the directory and put everything into $dir_array or $file_array
		if($open_dir = @opendir($this->clean_path)) {
			while(FALSE != ($spiff = readdir($open_dir))) {

				// File is not in black list
				if(!in_array($spiff, $this->blacklist)) {

					// File is directory
					if(is_dir($this->path . "/" . $spiff)) {

						// Is directory so open  up and see how many files are inside
						$dir_contents_count = 0;
						$dir_contents_size = 0;
						if($f_dir = @opendir($this->clean_path . "/" . $spiff)) {
							while(FALSE != ($f_name = readdir($f_dir))) {
								$dir_contents_count++;
		 
								// Might as well add up size too
								$dir_contents_size += filesize($this->clean_path . "/" . $spiff . "/". $f_name);
							}
		
							$dir_contents_count -= 2; // Remove values for . and ..
							$dir_contents_count = ($dir_contents_count > 0) ? $dir_contents_count : 0;
		
							$dir_contents_size_human = $dir_contents_size;
		
							$dir_contents_size = ($dir_contents_size == 0) ? '-' : $dir_contents_size_human;
							closedir($f_dir);
						}
						
						// End files inside
						if($this->order == "on") {
							// order is on

		   					// Insert into array $spiff == file name
							$dir_array[$spiff]['name'] = $spiff;
							$dir_array[$spiff]['details'] = $dir_contents_size;
							$dir_array[$spiff]['type'] = $dir_contents_count; // Holds number of files in directory
							$dir_array[$spiff]['mod_date'] = filemtime($this->clean_path . "/" . $spiff);
	   
							// Total file counter
							$this->file_count++;
						} else {
							$contents[$spiff]['name'] = $spiff;
							$contents[$spiff]['details'] = $dir_contents_size;
							$contents[$spiff]['type'] = '';
							$contents[$spiff]['mod_date'] = '';
							$this->file_count++;
						}
					} else { 
						if($this->order == "on") {
								$file_array[$spiff]['name'] = $spiff;
								$file_array[$spiff]['details'] = filesize($this->clean_path . "/" . $spiff);
								$file_array[$spiff]['type'] = $this->mimetype($this->clean_path . "/" . $spiff);
								$file_array[$spiff]['mod_date'] = filemtime($this->clean_path . "/" . $spiff);
								$this->file_count++;
						} else {
								$contents[$spiff]['name'] = $spiff;
								$contents[$spiff]['details'] = $this->human_file_size(filesize($this->clean_path . "/" . $spiff));
								$contents[$spiff]['type'] = $this->mimetype($this->clean_path . "/" . $spiff);
								$contents[$spiff]['mod_date'] = filemtime($this->clean_path . "/" . $spiff);
								$this->file_count++;
						}
					}
				} // END if file is not in blacklist

			} // END while

			// Begin sorting: Sort arrays and merge file and directory arrays
			if($this->order == "on") {

				// Two years later proper sorting...
				switch ($this->xss_f($_GET['c'])) {
					case 'details':
						$contents = array_merge($dir_array, $file_array);
						usort($contents, array('index0r','sizeCmp'));
						break;
					case 'type':
						$contents = array_merge($dir_array, $file_array);
						usort($contents, array('index0r','sizeCmp'));
						break;
					case 'mod_date':
						$contents = array_merge($dir_array, $file_array);
						usort($contents, array('index0r','sizeCmp'));
						break;
					default:
						$lowerCaseDirArray = $this->lower_case_array($dir_array);
						$lowerCaseFileArray = $this->lower_case_array($file_array);

						array_multisort($dir_array, SORT_ASC, SORT_STRING, $lowerCaseDirArray);
						array_multisort($file_array, SORT_ASC, SORT_STRING, $lowerCaseFileArray);

						$contents = array_merge($dir_array, $file_array);
				}

					return $contents;
				} else {
					return FALSE;
			}
		} // END is_open()
	} // END directory_array()

	function sizeCmp($a, $b) {
		if($this->xss_f($a[$_GET['c']]) == $this->xss_f($b[($_GET['c'])])) {
 			return 0;
		}
		if($this->xss_f($_GET['s']) == 'DESC') {
			return ($this->xss_f($a[$_GET['c']]) > $this->xss_f($b[$_GET['c']])) ? -1 : 1;
		}
		if($this->xss_f($_GET['s']) == 'ASC') {
			return ($this->xss_f($a[$_GET['c']]) < $this->xss_f($b[$_GET['c']])) ? -1 : 1;
		}
	}
	function set($var, $val) {
		$this->$var=$val;
	}
	function lower_case_array($array) {
		foreach($array as $key => $value) {
			$array[$key][name] = strtolower($value[name]);
		}

		return $array;
	}
	function xss_f($val) {
		return htmlentities($val);
	}
} // END index0r class


/*







EXECUTE AND RUN PROGRAM  AUTORUN LINES






*/
/*



END AUTORUN



*/











?>
