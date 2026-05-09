<?php
function mb_ucfirst($string) {
    return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
}

function mb_ucwords($string) {
    return mb_ucfirst(mb_strtolower($string));
}

$name = "иван";
$surname = "иванов";
$patronymic = "иванович";

$fullname = mb_ucwords($surname) . " " . mb_ucwords($name) . " " . mb_ucwords($patronymic);

$surnameAndInitials = mb_ucwords($surname) . " " . 
                      mb_strtoupper(mb_substr($name, 0, 1)) . "." . 
                      mb_strtoupper(mb_substr($patronymic, 0, 1)) . ".";

$fio = mb_strtoupper(mb_substr($surname, 0, 1)) . 
       mb_strtoupper(mb_substr($name, 0, 1)) . 
       mb_strtoupper(mb_substr($patronymic, 0, 1));

echo "Полное имя: '{$fullname}'\n";
echo "Фамилия и инициалы: '{$surnameAndInitials}'\n";
echo "Аббревиатура: '{$fio}'\n";
?>