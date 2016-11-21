<?php
session_start();
if($_SESSION['valueCapcha'] == $_POST['capcha'])
{
	echo "Поздравляю, ты не робот";
}
else {echo "Ты робот!";}










?>