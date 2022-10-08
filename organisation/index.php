<?php

$letter = "«Мы будем рады видеть Вашего сына на нашем мероприятии. Ждем его 25 октября. Оргкомитет.»";
$pieces = explode(". ", $letter);
$pieces[0] = substr_replace($pieces[0], "Уважаемый Slavik! ", 2, 0);
$pieces[2] = str_replace("Оргкомитет", "Администрация", $pieces[2]);
$pieces[0] = str_replace("Вашего сына", "Вашу дочь", $pieces[0]);
$pieces[1] = str_replace("его", "ее", $pieces[1]);

print implode(".\n", $pieces);