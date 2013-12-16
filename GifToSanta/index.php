<!DOCTYPE>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>

		$( document ).ready(function() {
			
			$('#button').click(function(){

				nume = $('#name').val();
				lastChar = nume.substr(nume.length - 1);

				var array = new Array();
				
				if(lastChar === 'a') 
					ImgName = 'f';
				else
					ImgName = 'b';

				ImgName += '2';
				val = $('input:radio[name=2]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';

				//alert(ImgName);

				array[0] = ImgName;
				ImgName = ImgName[0];
				//alert(ImgName);

				ImgName += '3';
				val = $('input:radio[name=3]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';
				array[1] = ImgName;
				ImgName = ImgName[0];

				ImgName += '4';
				val = $('input:radio[name=4]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';
				array[2] = ImgName;
				ImgName = ImgName[0];

				ImgName += '5';
				val = $('input:radio[name=5]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg ';
				array[3] = ImgName;
				ImgName = ImgName[0];

				ImgName += '6';
				val = $('input:radio[name=6]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';
				array[4] = ImgName;
				ImgName = ImgName[0];

				ImgName += '7';
				val = $('input:radio[name=7]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';
				array[5] = ImgName;
				ImgName = ImgName[0];

				ImgName += '8';
				val = $('input:radio[name=8]:checked').val();
				ImgName = ImgName + val;
				ImgName = ImgName + '.jpg';
				array[6] = ImgName;
	           
				var action = 'images/prepare.php';
				$.post(action, { 
					frames: array,
					name: nume
					},
					function(data){
						$('#blabla #submit').attr('disabled','');
						$('.response').remove();
						$('#blabla').before('<p style="margin:0px; margin-bottom:10px; text-align:center;">'+data+'</p>');
						$('.response').slideDown();
					}
				);

				$('html, body').animate({ scrollTop: 0 }, 'slow'); 
			});

		});

	</script>
	<link type ="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Gif to Santa </title>

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

	<div id = "formular">
		
		<div id="blabla"></div>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"> <b>Type your name:</b></font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "text" name = "name" id="name" style="width:310px; height:25px; border:1px thin #7C7C7C;"><br><br>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000"> <b>How do you spent your freetime?</b></font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "2" value = "1"> Clubbing<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "2" value = "2"> Learning<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "2" value = "3"> Gaming<br><br>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"><b> Hobbies:</b> </font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "3" value = "1"> Shopping <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "3" value = "2"> Sports <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "3" value = "3"> Programming <br><br>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"> <b>Describe yourself in one word:</b></font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "4" value = "1"> Calm <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "4" value = "2"> Organized <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "4" value = "3"> Dizzy <br><br>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"> <b>Favourite music:</b></font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "5" value = "1"> Rock <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "5" value = "2"> Classical Music <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "5" value = "3"> Reggae <br><br>

		&nbsp; &nbsp;<font style = "font-size: 40px; color: #e00000;"><b>Perfect vacation involves:</b></font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "6" value = "1"> Seaside <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "6" value = "2"> Mountain <br><br>

		&nbsp;&nbsp;<font style = "font-size: 40px; color: #e00000;"> <b>This year you have been a good person:</b> </font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "7" value = "1"> > 50% <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "7" value = "2"> < 50% <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "7" value = "3"> = 50% <br><br>

		&nbsp;&nbsp; <font style = "font-size: 40px; color: #e00000;"> <b>What do you want for Christams?</b> </font><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "8" value = "1"> To snow <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "8" value = "2"> To have all my friends around me <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type = "radio" name = "8" value = "3"> Santa to come with good grades on the finals <br><br>
       
        <div id = "btn">
			<button type = "button"  id = "button" name = "showGif" style="margin:0px auto;">
			<font style = "font-family: 'Oleo Script Swash Caps', cursive; color:#ffffff; font-size:23px">Create Gif</font> </button> <br><br><br>
		</div>

	</div>	

	<div id = "footer">
		<img src = "white_snowflake.png" id = "snowflake18"/>
		<div id = "logo_footer">
			<img src = "title.png" align = "left" width = "220px" height = "120px" /><br>
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