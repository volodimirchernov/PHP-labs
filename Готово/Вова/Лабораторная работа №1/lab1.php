<!doctype html>

<html>
	<head>
		<title> buy this! </title>
		<style>
		.tp
		   {
			   color: #72b000;
			   margin: 50px 100px 100px 100px;
		   }
		   
		   .tpr
		   {
			   margin: 100px 0 0px 500px;
		   }
		   
		   .leftlogo 
		   {
			float:left; /* Выравнивание по левому краю */
			margin: 7px 0px 0px 40px; /* Отступы вокруг картинки */
		   }
		   
		   .centerlogo 
		   {
			display: block;
			margin: 20px auto;
			float:middle; /* Выравнивание по центру */
		   }
		   
		   .rightlogo 
		   {
			float:right; /* Выравнивание по левому краю */
			margin: 7px 40px 0px 0px; /* Отступы вокруг картинки */
		   }
		   
		   .leftimg 
		   {
			display: block;
			margin: 0 auto;
			float:left; /* Выравнивание по левому краю */
			margin: 50px 80px 50px 100px; /* Отступы вокруг картинки */
		   }
		   
		   .rightimg  
		   {
			display: block;
			margin: 0 auto;
			float: right; /* Выравнивание по правому краю  */ 
			margin: 50px 100px 7px 80px; /* Отступы вокруг картинки */
		   }
		   
			ul.hr
			{
				color: #72b000;
				margin: 10px 0 0 0; /* Обнуляем значение отступов */
				padding: 15px; /* Значение полей */
			}
			
		   ul.hr li 
		   {  
				color: #72b000;
				display: inline; /* Отображать как строчный элемент */
				border: 1px solid #72b000; /* Рамка вокруг текста */
				padding: 10px; /* Поля вокруг текста */
				font-size: 20px;
		   }
		   
		   .contacts 
		   {    
				background-color: #4d4d4d;
				color: #72b000;
				border: 1px solid #72b000; /* Рамка вокруг текста */
				padding: 10px; /* Поля вокруг текста */
				padding-left: 150px;
				padding-right: 150px;
				font-size: 20px;
		   }
		   .footer_small
		   {
			    background-color: #4d4d4d;
			    color: #72b000;
				padding: 15px; /* Поля вокруг текста */
		   }
		   
		   .footer_normal
		   {
			    background-color: #4d4d4d;
			    color: #72b000;
				padding: 20px; /* Поля вокруг текста */
		   }
		   
			body
			{
				background-color: #2e2e2e;
			}
		</style>
	</head>
	
	<body>
	
<?php
	error_reporting(E_ALL);
				
	function create_page($arr)
    {
		
		// проверка первого тега
		
		$str1_1 = '[[logo_left]]';
		$str1_2 = '[[logo_center]]';
		$str1_3 = '[[logo_right]]';	

		switch ($arr[0]) 
		{
		 case $str1_1:
			echo "<img src = 'src/logo/logo.png' alt = 'Logo' width = '90px' height = '95px' class = 'leftlogo'>";
			break;
			
		 case $str1_2:
			echo "<img src = 'src/logo/logo.png' alt = 'Logo' width = '90px' height = '95px' class = 'centerlogo'>";
			break;
			
		 case $str1_3:
			echo "<img src = 'src/logo/logo.png' alt = 'Logo' width = '90px' height = '95px' class = 'rightlogo'>";
			break;
		}
		
		// проверка второго тега
		
		$str2_1 = '[[menu_off]]';		
		$str2_2 = '[[menu_on]]';
		
		switch ($arr[1]) 
		{
		 case $str2_1:
			echo "<p><br><br><br><br></p>";
			break;
		 case $str2_2:
			echo "<p>
				 <menu align = 'middle'>
				 <ul class = 'hr' align = 'middle'>
				 <li><strong>Видеокарты</strong></li>
				 <li>Процессоры</li>
				 <li>PC</li>
				 <li>VR</li>
				 </ul>
				 </menu>
				 </p>
				 <br><br><hr color = #72b000>";
			break;
		}
		
		// проверка третьего тега
		
		$str3_1 = '[[banner_left]]';		
		$str3_2 = '[[banner_center]]';
		$str3_3 = '[[banner_right]]';
		
		switch ($arr[2]) 
		{
		case $str3_1:
			echo "<img src = 'src/banner/banner.png' alt = 'Banner' width = '200px' height = '300px' class = 'leftimg'><br><br><br><br><br><br>";
			break;	
		case $str3_2:
			echo "<img src = 'src/banner/banner.png' alt = 'Banner' width = '200px' height = '300px' class = 'centerlogo'>";
			break;	
		 case $str3_3:
			echo "<img src = 'src/banner/banner.png' alt = 'Banner' width = '200px' height = '300px' class = 'rightimg'><br><br><br><br><br><br>";
			break;
		}
		
		// проверка четвёртого тега
		
		$str4_1 = '[[text_left]]';
		$str4_2 = '[[text_center]]';
		$str4_3 = '[[text_right]]';		
		
		switch ($arr[3]) 
		{
		 case $str4_1:
			echo "<p class ='tp' align = 'left'>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<br><br><br></p>";
			break;
		 case $str4_2:
			echo "<p class ='tp' align = 'middle'>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<br><br><br></p>";
			break;
		 case $str4_3:
			echo "<p class ='tp' align = 'right'>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<br><br><br></p>";
			break;
		}
		
		// проверка пятого тега
		
		$str5_1 = '[[contacts_left]]';		
		$str5_2 = '[[contacts_center]]';		
		$str5_3 = '[[contacts_right]]';		
		
		switch ($arr[4]) 
		{
		 case $str5_1:
			echo "<p align = 'left' class = 'contacts'>
				  <strong> Email: </strong>volodimirchernov@gmail.com</p>
				  <br><br><br>";
			break;
		 case $str5_2:
			echo "<p align = 'middle' class = 'contacts'>
				  <strong> Email: </strong> volodimirchernov@gmail.com</p>
				  <br><br><br>";
			break;
		 case $str5_3:
			echo "<p align = 'right' class = 'contacts'>
				  <strong> Email: </strong> volodimirchernov@gmail.com</p>
				  <br><br><br>";
			break;
		}
		
		// проверка шестого тега
				
		$str6_1 = '[[footer_small]]';		
		$str6_2 = '[[footer_normal]]';
		
		switch ($arr[5]) 
		{
		 case $str6_1:
			echo "<p align = 'middle' class = 'footer_small'>
					Copyright all rights reserved © 2016 <br>
					By <strong>Chernov V</strong></p>";
			break;
		 case $str6_2:
			echo "<p align = 'middle' class = 'footer_normal'>
				  <img src = 'img/fb.png' alt = 'Facebook' width = '35px' height = '35px' >
				  <img src = 'img/vk.png' alt = 'VKontakte' width = '35px' height = '35px'>
				  <img src = 'img/ok.png' alt = 'Odnoklassniki' width = '35px' height = '35px'><br>
				  Copyright all rights reserved © 2016 <br>
				  By <strong>Chernov V</strong></p>";
			break;
		}
	}
	
	// Создание трёх макетов
	
	$text = file_get_contents('data/PageTags1.txt');
	$parts = explode(' ', $text);
	create_page($parts);
	
	echo '<br><font color="#72b000"><p align = "middle"><strong>Макет №2</strong></p></font><br>';
	
	$text = file_get_contents('data/PageTags2.txt');
	$parts = explode(' ', $text);
	create_page($parts);
	
	echo '<br><font color="#72b000"><p align = "middle"><strong>Макет №3</strong></p></font><br>';
	
	$text = file_get_contents('data/PageTags3.txt');
	$parts = explode(' ', $text);
	create_page($parts);
	
	
	
	?>

		
	</body>
</html>