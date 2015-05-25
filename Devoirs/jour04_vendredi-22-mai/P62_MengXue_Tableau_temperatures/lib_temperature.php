<?php
$date_temperature = array(
    '2015-05-22' => 26.4,
    '2015-05-23' => 27.4,
    '2015-05-24' => 28.4,
    '2015-05-25' => 29.4,
    '2015-05-26' => 30.4,
    '2015-05-27' => 31.4,
    '2015-05-28' => 32.4,
    '2015-05-29' => 33.4,
    '2015-05-30' => 34.4,
    '2015-05-31' => 35.4,
);

function afficher_temperatures(&$tb)
{
    echo '<table>';
    echo "<tr><th>Num.</th><th>Date</th><th>Temperature</th></tr>";
    $count = 1;
    foreach ($tb as $date => $temperature) {
        echo "<tr><td>$count</td><td>$date</td><td>$temperature</td></tr>";
        $count++;
    }
    echo '</table>';

}