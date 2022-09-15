<?php
require_once("./farm.class.php");
//создаем объект фермы
$myfarm = new farm();
//добавляем коров
for($i=0;$i<10;$i++)
{
	$an = new cow();
	$myfarm->add_animal($an);
}
//добавляем кур
for($i=0;$i<20;$i++)
{
	$an = new hen();
	$myfarm->add_animal($an);
}
//считаем количество продукции за неделю
for($i=0;$i<7;$i++)
{
	$myfarm->GetProd();
}
//выводим значения
$myfarm->GetAnimals();
$myfarm->PrinProd();
//добавляем коров(купили)
for($i=0;$i<1;$i++)
{
	$an = new cow();
	$myfarm->add_animal($an);
}
//добавляем кур(купили)
for($i=0;$i<5;$i++)
{
	$an = new hen();
	$myfarm->add_animal($an);
}
//считаем количество продукции за неделю
for($i=0;$i<7;$i++)
{
	$myfarm->GetProd();
}
//выводим значения за прошедшие две недели
$myfarm->GetAnimals();
$myfarm->PrinProd();
?>
