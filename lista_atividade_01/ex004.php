

<?php

function conversaoFahrenheit($tempCelcius) {
    $tempFahrenheit = $tempCelcius * (9.0 / 5.0) + 32.0;
    return $tempFahrenheit;
}

echo conversaoFahrenheit(10);

?>