<?php
  function fullName(string $name, string $surname, string $lastname) 
  {
    $fullName = "Полное имя: " . mb_convert_case($name, MB_CASE_TITLE, "UTF-8") . " " . mb_convert_case($surname, MB_CASE_TITLE, "UTF-8") . " " . mb_convert_case($lastname, MB_CASE_TITLE, "UTF-8");

    $fio = "Фамилия и инициалы: " . mb_convert_case($name, MB_CASE_TITLE, "UTF-8") . " " . mb_convert_case(mb_substr($surname, 0, 1, "UTF-8"), MB_CASE_TITLE, "UTF-8") . "." . mb_convert_case(mb_substr($lastname, 0, 1, "UTF-8"), MB_CASE_TITLE, "UTF-8") . ".";

    $surnameAndInitials = "Аббревиатура: " . mb_convert_case(mb_substr($name, 0, 1, "UTF-8"), MB_CASE_TITLE, "UTF-8") . mb_convert_case(mb_substr($surname, 0, 1, "UTF-8"), MB_CASE_TITLE, "UTF-8") . mb_convert_case(mb_substr($lastname, 0, 1, "UTF-8"), MB_CASE_TITLE, "UTF-8");

    echo $fullName;

    echo '<br>';

    echo $fio;

    echo '<br>';

    echo $surnameAndInitials;
  }

  fullName('иннокентий', 'петрович', 'макаров');
?>
