<?php
// За допопомогою range створюємо масив, який містить значення від 1 до 12, виводимо за домогою foreach
foreach (range(1, 12) as $number) {
    echo '<span>' .$number. '</span><br>';
}