<?php

	// session_start(); 

	// if(!$_POST) header("Location: index.php");
	// if(!isset($_POST['token']))	$_POST['token']="";

	// if ( $_POST['token'] == $_SESSION['token'] ) 
	// { 
	// 	$token_age = time() - $_SESSION['token_time']; 
	// 	if ( $token_age <= 180 ) 
	// 	{
			// prepare data
			// preluare info din index.php -> array cu numele imaginilor
			// creare gif cu imaginile selectate
			// posibilitate de vizualizare GIF, send to Socials, send email to a friend, etc.
			// posibilitate de download

			require_once "GifCreator/GifCreator.php";

			// Create an array containing file paths, resource var (initialized with imagecreatefromXXX), 
			// image URLs or even binary code from image files.
			// All sorted in order to appear.

			$name = $_POST['name'];
			$frames = $_POST['frames'];

			// Create an array containing the duration (in millisecond) of each frames (in order too)
			$durations = array(40, 40, 40, 40, 40, 40, 40, 40);

			// Initialize and create the GIF !

			$gc = new GifCreator();
			$gc->create($frames, $durations, 0);

			$gifBinary = $gc->getGif();

			// New GIF name
			$gif_name = str_replace(" ","_",$name);
			$gif_name .= '.gif';
			$gif_name = "savings/".$gif_name;

			file_put_contents($gif_name, $gifBinary);
			echo $gif_name;

			// send email to a friend
			// $to = "someone@example.com";
			// $subject = "Hello Santa !";
			// $message = "Hello! This is my GIF which describes me, I hope that it will convince you to give me the best present !";
			// $from = "someonelse@example.com";
			// $headers = "From:" . $from;
			// mail($to,$subject,$message,$headers);

?>