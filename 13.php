<?php
/*Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек*/
$s = 200;
$t = 10;
echo "Скорость авто = $s/$t = " . $s/$t .' км/ч <br>';
echo "Скорость авто = $s/$t= " . $s/$t*1000/3600 .' м/с;';
?>