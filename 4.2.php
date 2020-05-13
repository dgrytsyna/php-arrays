<?php
// Запишемо елементи до масиву
$countries = array(
    'Europe' =>['Ukraine','Germany','Poland'],
    'Asia'=>['China','Japan'],
    'Africa'=>['Egypt', 'Tanzania', 'Ethiopia'],
    'Australia'=>'Australia'
);
//Перебираємо масив, виводимо значення
foreach($countries as $continent=>$country){
    //Перевірка чи є country масивом
    if(is_array($country)){
        foreach($country as $this_continent=>$this_country){
            echo '<p>' .$this_country. ' is in ' .$continent. '</p>'; 
        };
    }else{
        echo '<p>' .$country. ' is in ' .$continent. '</p>'; 
    }
}