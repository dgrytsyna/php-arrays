<?php
$numbers = array(-1, 2, -32, 5, -8, 12, 7, -4, 0, 6);
//Функція перевіряє чи є додатнім число
function is_positive($number){
    return ($number > 0 ) ? 1 : 0;
};
//Створення нового масиву з елементів, що задовільняють умову
$positive_number = array_filter($numbers, "is_positive");
print_r($positive_number);