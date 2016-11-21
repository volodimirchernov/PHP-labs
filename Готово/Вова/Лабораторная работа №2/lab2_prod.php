<?php
# Вариант #13 
# Исходный файл: .gif
# Расположение текста: вверху
# Вид орнамента: 1а (полукруг, все одного цвета)
# Размер орнамента: 10px
# Выходной файл: .jpg
#

// Получаем размер изображения
$myPhoto = "src/background/ChernovV.gif";

$mp = imagecreatefromgif($myPhoto);

// массив с размерами
$size = getimagesize($myPhoto); 

// ширина изображения
$widthMP = $size[0];

// высота изображения
$heightMP = $size[1];

// размер узора рамки [Х2]
$TwoSizeOfBorder = 20;

// создание фона с размером изображения + размер рамки
$bg = ImageCreate ($widthMP + $TwoSizeOfBorder, $heightMP + $TwoSizeOfBorder); 

// цвет фона
$white = imageColorAllocate($bg, 255, 255, 255);

// цвет рамки
$borderColor = ImageColorAllocate ($bg, 0, 100, 200);

// цвет текста
$textColor = ImageColorAllocate ($bg, 0, 100, 200);

// наложение изображения поверх фона
imagecopy($bg, $mp, 10, 10, 0, 0, $widthMP, $heightMP);	


// леввая часть рамки
for ($i = 15; $i <= 440; $i = $i + 10) 
	{
		imageFilledArc($bg, 9, $i, 10, 10, 90, 270, $borderColor, IMG_ARC_PIE );
	}
// правая часть рамки	
for ($i = 15; $i <= 440; $i = $i + 10) 
	{
		imageFilledArc($bg, 330, $i, 10, 10, 270, 90, $borderColor, IMG_ARC_PIE );
	}

// нижняя часть рамки	
for ($i = 14; $i <= 330; $i = $i + 10) 
	{
		imageFilledArc($bg, $i, 437, 10, 10, 0, 180, $borderColor, IMG_ARC_PIE );
	}
// верхняя часть рамки	
for ($i = 15; $i <= 330; $i = $i + 10) 
	{
		imageFilledArc($bg, $i, 9, 10, 10, 180, 0, $borderColor, IMG_ARC_PIE );
	}

$text = 'Чернов Владимир ПИз - 14';	
$font = 'src/font/arial.ttf';	
imageTtfText($bg, 14, 0, 50, 40, $textColor, $font, $text);



	
// Вывод и освобождение памяти
header('Content-Type: image/gif');

imagegif($bg);
imagejpeg($bg,'Successful.jpg',100);
imagedestroy($bg);

?>



