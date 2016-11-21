<?php
error_reporting(E_ALL);
$whatTimeIsIt = date('H'); //целых часов сейчас
?>

<!doctype html>

<html>
	<head>
		<title> our fucking work-board </title>
		<style>
		body
		{
				background: url(img/0.png);
				background-size: cover;
		}
		</style>
	</head>
	
	<body>
	
<?php
	$fp1 = 1;
	$sp1 = 2;
	$rand1 = mt_rand(-10, 10); // рандомное число
	
	if($fp1 < $sp1)
	{
		echo 'рандом [-10 <-> 10] = '.$rand1.' Всё окей.'."<br>";
	}
	
	$floatToIntVal = 1.9;
	$intVal = (int)$floatToIntVal;
	echo "<br>"."$intVal";
	
																		/**
																		$rainbow = 
																		[
																			'Каждый' => ['Красный','#FF0000'],
																			'Охотник' => ['Оранжевый','#FFA500'],
																			'Желает' => ['Жёлтый','#FFFF00'],
																			'Знать' => ['Зелёный','#008000'],
																			'Где' => ['Голубой','#00FFFF'],
																			'Сидит' => ['Синий','#000080'],
																			'Фазан' => ['Фиолетовый','#9400D3']
																		];
																		
																		echo '<br>'.$rainbow['Каждый'].'<br>'.'<br>';
																		foreach($rainbow as $key => $value)
																		{
																			echo "$key - $value <br>";
																		}
																		**/
	
																		//$text = file_get_contents('data/Type1.txt');
																		//$parts = explode(' ', $text);
																		
																		//echo '<br>'.$text;
																		//echo '<br><br>'.$parts[0].'<br><br>';
																		//for($i = 0; $i < 5; $i++)
	
																		/**
																		foreach($parts as $value)
																		{
																			echo $value;
																		}
																		**/
	
																		/**
																		if (strcmp ( $parts[0] , $str1_1 ) == 0)
																		{echo '<br>'.'Fuck Yeah!'.'<br>';}
																		 else 
																		 {echo '<br>'.'Not Fuck Yeah!'.'<br>';}
																		**/
	
	
	
	$pre = "<html>
			<head>
			<meta charset='utf-8'>
			<title> our fucking work-board </title>
				<style>
				<style type='text/css'>
				   .tp
				   {
					   margin: 100px 0 0px 100px;
				   }
				   
				   .tpr
				   {
					   margin: 100px 0 0px 500px;
				   }
				   
				   .leftlogo 
				   {
					float:left; /* Выравнивание по левому краю */
					margin: 7px 0px 7px 35px; /* Отступы вокруг картинки */
				   }
				   
				   .centerlogo 
				   {
					display: block;
					margin: 0 auto;
					float:middle; /* Выравнивание по центру */
				   }
				   
				   .rightlogo 
				   {
					float:right; /* Выравнивание по левому краю */
					margin: 7px 35px 0px 0px; /* Отступы вокруг картинки */
				   }
				   
				   .leftimg 
				   {
					display: block;
					margin: 0 auto;
					float:left; /* Выравнивание по левому краю */
					margin: 7px 100px 7px 100px; /* Отступы вокруг картинки */
				   }
				   .rightimg  
				   {
					display: block;
					margin: 0 auto;
					float: right; /* Выравнивание по правому краю  */ 
					margin: 7px 200px 0px 7px; /* Отступы вокруг картинки */
				   }
				   
					ul.hr
					{
						margin: 10px 0 0 0; /* Обнуляем значение отступов */
						padding: 15px; /* Значение полей */
					}
					
				   ul.hr li 
				   {  
						display: inline; /* Отображать как строчный элемент */
						border: 1px solid #000; /* Рамка вокруг текста */
						padding: 10px; /* Поля вокруг текста */
						font-size: 20px;
				   }
				   
				   .contacts 
				   {    
						background-color: #fc7f49;
						color: #520030;
						border: 1px solid #fc6e3f; /* Рамка вокруг текста */
						padding: 10px; /* Поля вокруг текста */
						font-size: 20px;
				   }
				   .footer_small
				   {
						background-color: #291229;
						color: #e63127;
						padding: 5px; /* Поля вокруг текста */
				   }
				   .footer_normal
				   {
						background-color: #291229;
						color: #e63127;
						padding: 20px; /* Поля вокруг текста */
				   }
					body
					{
						background: url(src/background/background.png);
						background-size: cover;
					}
				</style>
			</head>
			<body>\r\n";
	
	$logoleft = "<p><img src = 'src/logo/logo-fw.png' alt = 'Logo' width = '90px' height = '95px' class = 'leftlogo'></p>\r\n";
	
	$logocenter = "<p><img src = 'src/logo/logo-fw.png' alt = 'Logo' width = '90px' height = '95px' class = 'leftlogo'></p>\r\n";
	
	$logoright = "<p><img src = 'src/logo/logo-fw.png' alt = 'Logo' width = '90px' height = '95px' class = 'leftlogo'></p>\r\n";

	$menuOn = "<p><menu align = 'middle'>
				<ul class = 'hr' align = 'middle'>
				<li><strong>Main</strong></li>
				<li>Books</li>
				<li>News</li>
				<li>Contacts</li>
				</ul>
				</menu>
				</p><br><br><br><br>\r\n";
			
	$textOn = "<p class ='tp' align = 'middle'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
				Excepteur sint occaecat cupidatat non proident,<br>
				sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><br><br><br><br><br><br><br><br><br><br><br>\r\n";	

	$bannerLeft = "<img src = 'src/banner/banner.png' alt = 'Banner' width = '200px' height = '300px' class = 'leftimg'><br><br><br><br>\r\n";
	
	$bannerCenter = "<img src = 'src/banner/banner.png' alt = 'Banner' width = '550px' height = '700px' class = 'centerlogo'><br><br><br><br>\r\n";
	
	$bannerRight = "<img src = 'src/banner/banner.png' alt = 'Banner' width = '200px' height = '300px' class = 'rightimg'><br><br><br><br>\r\n";
	
	
	$cotactsLeft = "<p align = 'left' class = 'contacts'>
					<strong> Email: </strong> volodimirchernov@gmail.com</p><br><br><br><br><br><br><br><br><br><br><br>\r\n";
					
	$cotactsCenter = "<p align = 'middle' class = 'contacts'>
					  <strong> Email: </strong> volodimirchernov@gmail.com</p><br><br><br><br><br><br><br><br><br><br><br>\r\n";
					  
	$cotactsLeft = "<p align = 'right' class = 'contacts'>
					<strong> Email: </strong> volodimirchernov@gmail.com</p><br><br><br><br><br><br><br><br><br><br><br>\r\n";	

	$footerSmall = "<p align = 'middle' class = 'footer_small'>
					Copyright all rights reserved © 2016 <br>
					By <strong>Chernov V</strong></p>
					</body></html>\r\n";
					
	$footerNormal = "<p align = 'middle' class = 'footer_normal'>
						<img src = 'img/fb.png' alt = 'Facebook' width = '35px' height = '35px' >
						<img src = 'img/vk.png' alt = 'VKontakte' width = '35px' height = '35px'>
						<img src = 'img/ok.png' alt = 'Odnoklassniki' width = '35px' height = '35px'>
						<br>
						Copyright all rights reserved © 2016 <br>
						By <strong>Chernov V</strong></p>
						</body></html>\r\n";	

//$fp = fopen($wayToFile, "a"); // Открываем файл в режиме записи 
	//$mytext = "Это строку необходимо нам записать\r\n"; // Исходная строка
	//$test = fwrite($fp, $mytext); // Запись в файл
	//if ($test) echo 'Данные в файл успешно занесены.';
	//else echo 'Ошибка при записи в файл.';
	//fclose($fp); //Закрытие файла
	
	
	
				
	function create_page($arr, $wtf)
    {	
		// открытие записи в файл по пути wtf 
		$fp = fopen($wtf, "a"); 
		
		// примеры первого тега
		$str1_1 = '[[logo_left]]';
		$str1_2 = '[[logo_center]]';
		$str1_3 = '[[logo_right]]';	
		
		fwrite($fp, $pre); //запись в файл
		
		// проверка первого тега
		switch ($arr[0]) 
		{
		 case $str1_1:
			echo '<br><br>'."left logo";
			fwrite($fp, $logoLeft); //запись в файл
			break;
			
		 case $str1_2:
			echo '<br><br>'."center logo";
			fwrite($fp, $logoCenter); //запись в файл
			break;
			
		 case $str1_3:
			echo '<br><br>'."right logo";
			fwrite($fp, $logoRight); //запись в файл
			break;
		}
		
		// проверка второго тега
		
		$str2_1 = '[[menu_off]]';		
		$str2_2 = '[[menu_on]]';
		
		switch ($arr[1]) 
		{
		 case $str2_1:
			echo '<br>'."menu off";
			;
			break;
		 case $str2_2:
			echo '<br>'."menu on";
			$flag = $flag + 20;
			break;
		}
		
		// Добавление меню и/или лого
		
		switch ($flag) 
		{
		 case 2:					// left logo + off menu
			echo '<br>'."menu off";
			$flag = $flag + 1;
			break;
		 case 3:					// left logo + off menu
			echo '<br>'."menu on";
			$flag = $flag + 2;
			break;
		}
		
		// проверка третьего тега
		
		$str3_1 = '[[banner_off]]';		
		$str3_2 = '[[banner_on]]';
		
		switch ($arr[2]) 
		{
		 case $str3_1:
			echo '<br>'."banner off";
			break;
		 case $str3_2:
			echo '<br>'."banner on";
			break;
		}
		
		// проверка четвёртого тега
		
		$str4_1 = '[[text_left]]';
		$str4_2 = '[[text_center]]';
		$str4_3 = '[[text_right]]';		
		
		switch ($arr[3]) 
		{
		 case $str4_1:
			echo '<br>'."left text";
			break;
		 case $str4_2:
			echo '<br>'."center text";
			break;
		 case $str4_3:
			echo '<br>'."right text";
			break;
		}
		
		// проверка пятого тега
		
		$str5_1 = '[[contacts_left]]';		
		$str5_2 = '[[contacts_center]]';		
		$str5_3 = '[[contacts_right]]';		
		
		switch ($arr[4]) 
		{
		 case $str5_1:
			echo '<br>'."left contacts";
			break;
		 case $str5_2:
			echo '<br>'."center contacts";
			break;
		 case $str5_3:
			echo '<br>'."right contacts";
			break;
		}
		
		// проверка шестого тега
				
		$str6_1 = '[[footer_small]]';		
		$str6_2 = '[[footer_normal]]';
		
		switch ($arr[5]) 
		{
		 case $str6_1:
			echo '<br>'."small footer".'<br><br>';
			break;
		 case $str6_2:
			echo '<br>'."normal footer".'<br><br>';
			break;
		}
	}
	
	$wayToFile = 'pages/Page1.php';
	
	$text = file_get_contents('data/Page1.txt');
	$parts1 = explode(' ', $text);
	create_page($parts1, $wayToFile);
	
	echo '<br><br>http://localhost/Page1.php';
	
					
	$wayToFile = 'pages/Page2.php';				
	
	$text = file_get_contents('data/Page2.txt');
	$parts2 = explode(' ', $text);
	create_page($parts2, $wayToFile);
	
	echo '<br><br>http://localhost/Page2.php';
	
	$wayToFile = 'pages/Page3.php';
	
	$text = file_get_contents('data/Page3.txt');
	$parts3 = explode(' ', $text);
	create_page($parts3, $wayToFile);
	
	echo '<br><br>http://localhost/Page3.php';
	
	
	
?>
	
	
	
	
	
	
	<h1>
		<?php 
			echo $whatTimeIsIt + 1; 
		?>
	</h1>
	
	<p>Ok, Boss.</p>
	</body>
</html>