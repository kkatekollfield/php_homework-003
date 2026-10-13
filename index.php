<?php
$name = trim(fgets(STDIN));
$surname = trim(fgets(STDIN));
$patronymic = trim(fgets(STDIN));

$fullname = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8') . ' ' . 
            mb_convert_case($name, MB_CASE_TITLE, 'UTF-8') . ' ' . 
            mb_convert_case($patronymic, MB_CASE_TITLE, 'UTF-8');

$surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8') . ' ' . 
            mb_strtoupper(mb_substr($name, 0, 1, 'UTF-8'), 'UTF-8') . '.' .
            mb_strtoupper(mb_substr($patronymic, 0, 1, 'UTF-8'), 'UTF-8') . '.';

$fio = mb_strtoupper(mb_substr($surname, 0, 1, 'UTF-8'), 'UTF-8') .
            mb_strtoupper(mb_substr($name, 0, 1, 'UTF-8'), 'UTF-8') .
            mb_strtoupper(mb_substr($patronymic, 0, 1, 'UTF-8'), 'UTF-8');

echo "Полное имя: $fullname" . PHP_EOL;
echo "Фамилия и инициалы: $surnameAndInitials" . PHP_EOL;
echo "Аббревиатура: $fio" . PHP_EOL;
