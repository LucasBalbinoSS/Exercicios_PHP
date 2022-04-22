<?php

function conversaoCelcius($tempFahrenheit) {
    $tempFahrenheit = round(5.0 * ($tempFahrenheit - 32.0) / 9.0);
    return $tempFahrenheit;
}

echo conversaoCelcius(10);

?>