<?php
$flowers = ['daisy', 'rose', 'orchid', 'sunflower', 'tulip'];
// Повертає елемент у верхньому регістрі
array_walk($flowers, function(&$value, $key){
    $value = strtoupper($value);
});
foreach($flowers as $flower){
    echo '<span>' .$flower. '</span><br>';
};