<?php
$animals = array('cat', 'elephant', 'frog', 'dog', 'parrot', 'fish', 'butterfly', 'goose', 'pig');
//Сортування по кількості літер у слові
 usort($animals, function ($a,$b){
    return strlen($b)-strlen($a);
});
print_r($animals);