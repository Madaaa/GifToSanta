<?php

	if (isset($_GET['file'])) {
		
		$file = $_GET['file'];
		$file_path = "images/savings/".$_GET["file"];

		if (file_exists($file_path) && is_readable($file_path) && preg_match('/\.gif$/',$file_path)) {
			header("Pragma: public");
		    header("Expires: 0");
		    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		    header("Cache-Control: private",false); // required for certain browsers
		    header("Content-Type: image/gif");
		    header("Content-Disposition: attachment; filename=\"".$file."\";" );
		    header("Content-Transfer-Encoding: binary");
			flush();
    		readfile( $file_path );
		}
	} else {
		header("HTTP/1.0 404 Not Found");
		echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>";
	}
	
?>