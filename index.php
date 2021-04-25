<?php

$my_variable = 100; // целое число - integer - int
$your_variable = 500.101; //дробь  - float 
$c = "Hawdy hlo"; // строка - string - str
$x = $arrayName = array (1,'Jonny',3,4,5,6,r=>array(петуч,гачи)); //массив - array
$t = true; //Булево значение - boolean, bol
$f = false; //Булево значение
	echo $my_variable; 
	echo '<hr>';
	echo $your_variable;
	echo '<br/>';
	echo $x[0];
	echo '<br/>';
	echo $arrayName[r][0];
$name = 'Oleg';
$surname = 'Popov';
	echo '<br>'.$name.' '.$surname.'<br>';
	echo 1883 % 3;
	echo '<br>';
$window = 'open'; //окно открыто, закрыто, приоткрыто 
if($window == 'close') {echo 'Приоткрой окно!';}
if($window == 'ajar') {echo 'Закрой окно!';}
if($window == 'open') {echo 'Поставь на проветривание!';}