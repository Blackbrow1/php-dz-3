<?php
function fullName(string $surname, string $name, string $patronymic) 
{
  $surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");
  $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
  $patronymic = mb_convert_case($patronymic, MB_CASE_TITLE, "UTF-8");
  
  $fullName = "$name $patronymic $surname";
  
  $fio = "$surname " . mb_substr($name, 0, 1, "UTF-8") . "." . mb_substr($patronymic, 0, 1, "UTF-8") . ".";
  
  $surnameAndInitials = mb_substr($surname, 0, 1, "UTF-8") . 
                        mb_substr($name, 0, 1, "UTF-8") . 
                        mb_substr($patronymic, 0, 1, "UTF-8");
  
  echo "Полное имя: $fullName" . PHP_EOL;
  echo "Фамилия и инициалы: $fio" . PHP_EOL;
  echo "Аббревиатура: $surnameAndInitials";
}

fullName('макаров', 'иннокентий', 'петрович');
?>