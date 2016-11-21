<?php

/**
// Получение размеров картинки

$size = getimagesize($image); // array

$dest_x = $size[0] // $width; 
$dest_y = $size[1] // $height; 

**/


// Создание изображений

$file = "src/background/ds4.gif";
$fileAbove = "src/logo/logo.png";

$dest = imagecreatefromgif($file);
$src = imagecreatefrompng($fileAbove);

$color = imagecolorallocate($dest,255,0,0);

// Копирование и наложение

imagecopymerge($dest, $src, 69, 114, 0, 0, 212, 198, 45);


															/**тест**/ imageFilledArc($dest, 300, 300, 10, 10, 180, 0, IMG_ARC_PIE, $color);




// левая часть рамки
$aw = 69;
$bh = 119;	// +5 радиус

for ($i = 119; $i <= 312; $i = $i + 10) 
	{
		imageFilledArc($dest, $aw, $i, 10, 10, 90, 270, IMG_ARC_PIE, $color);
	}
	
// правая часть рамки
$aw = 281;
$bh = 119;	// +5 радиус
	
for ($i = 119; $i <= 312; $i = $i + 10) 
	{
		imageFilledArc($dest, $aw, $i, 10, 10, 270, 90, IMG_ARC_PIE, $color);
	}

// верхняя часть рамки	
$aw = 74; // +5 радиус
$bh = 114;
	
for ($i = 74; $i <= 281; $i = $i + 10) 
	{
		imageFilledArc($dest, $i, $bh, 10, 10, 180, 0, IMG_ARC_PIE, $color);
	}
	
// нижняя часть рамки
$aw = 74; // +5 радиус
$bh = 312;
	
for ($i = 74; $i <= 281; $i = $i + 10) 
	{
		imageFilledArc($dest, $i, $bh, 10, 10, 0, 180, IMG_ARC_PIE, $color);
	}
	
	
	
// Вывод и освобождение памяти
header('Content-Type: image/gif');
imagegif($dest);


imagedestroy($dest);
imagedestroy($src);
?>



