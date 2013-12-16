<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
	<link type ="text/css" rel="stylesheet" href="stylesheet2.css"/>
	<title>Gif to Santa </title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		jQuery( document ).ready( function() {

			$('#sendSanta').click(function(){				  
				
				var action = 'send_to_santa.php';
				var filename = '<?php echo $_GET['gifname']; ?>';
				$.post(action, { 
					file: filename,
					email: $('#mailSanta').val(),
					subject: $('#subjectSanta').val(),
					message: $('#messageSanta').val()
					},
					function(data){
						$('#santa').attr('disabled','');
						$('.response').remove();
						$('#santa').before('<p style="margin:0px; margin-bottom:10px; text-align:center;">'+data+'</p>');
						$('.response').slideDown();
					});
				});
			});

	</script>
		
</head>
<body>
	<div id = "header">
		<img src = "white_snowflake.png" id = "snowflake8"/>
		<div id = "logo">
			<a href="index.php"><img src = "title.png" align = "left" width = "400px" height = "200px" /></a><br>
			<img src = "white_snowflake.png" id = "snowflake1"/>
			<img src = "white_snowflake.png" id = "snowflake2"/>
			<img src = "white_snowflake.png" id = "snowflake3"/>
			<img src = "white_snowflake.png" id = "snowflake4"/>
			<img src = "white_snowflake.png" id = "snowflake5"/>
			<img src = "white_snowflake.png" id = "snowflake6"/>
			<img src = "white_snowflake.png" id = "snowflake7"/>
			<img src = "white_snowflake.png" id = "snowflake9"/>
		</div>
		<img src = "white_snowflake.png" id = "snowflake10"/>
	</div>
	<div id = "main_content">
		<div id = "showGif">
        
        	 
			 	<img src = "images/savings/<?php echo $_GET['gifname']; ?>" height="300px" width="400px" 
                style="margin:0px auto; border:1px solid #DDD;" >
             
			 <br><br>

			 <div id = "santa">

			  &nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"><b>Email: </b></font>&nbsp;&nbsp;
              <input type = "text" id = "mailSanta" style="width:300px; height:25px; border:1px thin #7C7C7C;"><br><br>
			  &nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"><b>Subject: </b></font>
              </input>
              <input type = "text" id = "subjectSanta" style="width:300px; height:25px; border:1px thin #7C7C7C;" ><br><br>
			  &nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"><b>Message: </b></font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <textarea rows = "10" cols = "60"></textarea><br><br>
			  &nbsp;&nbsp;<button type = "button" id = "sendSanta"><font style = "font-family: 'Oleo Script Swash Caps', cursive; color:#ffffff; font-size:23px">Send it to Santa</font></button>
			  <br><br>

			  &nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"><b>Get your Gif!</b></font><br><br>
			  &nbsp;&nbsp;
			  <a href="get_your_gif.php?file=<?php echo $_GET['gifname']; ?>" >
			  <button type = "button" id = "download"><font style = "font-family: 'Oleo Script Swash Caps', cursive; color:#ffffff; font-size:23px">Download</font></button>
			  </a>
			</div>		 			 		 
		</div>
	</div>

	<div id = "footer">
		<img src = "white_snowflake.png" id = "snowflake18"/>
		<div id = "logo_footer">
			<img src = "title.png" align = "left" width = "200px" height = "100px" /><br>
		    <img src = "white_snowflake.png" id = "snowflake11"/>
			<img src = "white_snowflake.png" id = "snowflake12"/>
			<img src = "white_snowflake.png" id = "snowflake13"/>
			<img src = "white_snowflake.png" id = "snowflake14"/>
			<img src = "white_snowflake.png" id = "snowflake15"/>
			<img src = "white_snowflake.png" id = "snowflake16"/>
			<img src = "white_snowflake.png" id = "snowflake17"/>
			<img src = "white_snowflake.png" id = "snowflake19"/>
		</div>
		<img src = "white_snowflake.png" id = "snowflake20"/>
	</div>	

</body>
</html>