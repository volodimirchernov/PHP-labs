<?php
# Чернова Дарья ПИз-14
# Вариант #14
# Исходный файл: .png
# Расположение текста: внизу
# Вид орнамента: 1б (треугольник основанием к рамке, все одного цвета)
# Размер орнамента: 15px
# Выходной файл: .png
#

// Получаем размер изображения
$myPhoto = "src/background/ChernovaD.png";

$mp = imagecreatefrompng($myPhoto);

// массив с размерами
$size = getimagesize($myPhoto); 

// ширина изображения
$widthMP = $size[0];

// высота изображения
$heightMP = $size[1];

// размер узора рамки [Х2]
$TwoSizeOfBorder = 19;

// создание фона с размером изображения + размер рамки
$bg = ImageCreateTrueColor ($widthMP + $TwoSizeOfBorder, $heightMP + $TwoSizeOfBorder); 

// цвет фона
$white = imageColorAllocate($bg, 255, 255, 255);

// цвет рамки
$borderColor = ImageColorAllocate ($bg, 0, 100, 200);

// цвет текста
$textColor = ImageColorAllocate ($bg, 0, 100, 200);

// наложение изображения поверх фона
imagecopy($bg, $mp, 10, 10, 0, 0, $widthMP, $heightMP);	


// леввая часть рамки
for ($i = 18; $i <= 520; $i = $i + 15) 
	{
		imageArc($bg, 9, $i, 15, 15, 90, 270, $borderColor);
	}
// правая часть рамки	
for ($i = 18; $i <= 520; $i = $i + 15) 
	{
		imageArc($bg, 340, $i, 15, 15, 270, 90, $borderColor);
	}

// нижняя часть рамки	
for ($i = 17; $i <= 340; $i = $i + 15) 
	{
		imageArc($bg, $i, 520, 15, 15, 0, 180, $borderColor);
	}
// верхняя часть рамки	
for ($i = 17; $i <= 340; $i = $i + 15) 
	{
		imageArc($bg, $i, 9, 15, 15, 180, 0, $borderColor);
	}

$text = 'Чернова Дарья ПИз - 14';	
$font = 'src/font/arial.ttf';	
imageTtfText($bg, 14, 0, 60, 500, $textColor, $font, $text);



	
// Вывод и освобождение памяти
header('Content-Type: image/gif');

imagegif($bg);
imagegif($bg,'Successful.gif');
imagedestroy($bg);

?>



