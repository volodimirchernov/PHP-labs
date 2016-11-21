<?php echo "Мне "; ?>

<select>
<?php
	
	for ($i = 5; $i <= 99; $i++)
	{
		echo "<option value=\"$i\"> $i </option>";
		
	}
?>
</select>

<?php echo " Лет. Дайте "; ?>
<?php
	const PI = 3.14; //new
	define (PI , 3.14); //old
	
	$a = 50;
	$b = " грамм водки пожалуйста";
	echo $a . $b;
	echo " и Hello, world! <br>";
	
	$str = "\$a окей ага";
	echo "<br> $str <br> $str";
	
?>