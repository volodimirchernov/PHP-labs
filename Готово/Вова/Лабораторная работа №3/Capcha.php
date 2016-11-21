<?php
error_reporting(E_ALL);
var_dump($_POST);


if(count($_POST) > 0)
{
	$capchaValue = $_POST['capcha'];
}
	else
	{
		echo "Докажи что ты не бот";
	}
?>

<form action ="validation.php" method= "post">
<br>
<img src = "lab3bn.php" alt = "защитный код"><br>
<p>Введите код с картинки.</p>
<input type = "text" name = "capcha"><br>
<input type = "submit" value = "Отправить"><br>
</form>