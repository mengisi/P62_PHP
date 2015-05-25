<?php


$date_temperature = array(
    '2015-05-31' => 26.4,
    '2015-05-30' => 27.4,
    '2015-05-24' => 28.4,
    '2015-05-25' => 29.4,
    '2015-05-21' => 30.4,
    '2015-05-27' => 31.4,
    '2015-05-28' => 32.4,
    '2015-05-29' => 33.4,
    '2015-05-20' => 34.4,
    '2015-05-14' => 35.4,
);

function afficher_temperatures($tb)
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

function afficher_temperatures_2($tb, $trier_date)
{
    if ($trier_date == 'trier_date') {
        ksort($tb);
    }
    echo '<table>';
    echo "<tr><th>Num.</th><th>Date</th><th>Temperature</th></tr>";
    $count = 1;
    foreach ($tb as $date => $temperature) {
        echo "<tr><td>$count</td><td>$date</td><td>$temperature</td></tr>";
        $count++;
    }
    echo '</table>';
}

function afficher_temperatures_3(&$tb, $trier_date, $date_fmt)
{
    if ($trier_date == 'trier_date') {
        ksort($tb);
    }
    if ($date_fmt == 'date_fmt') {
        setlocale(LC_TIME, 'fra_fra');                               //设置法语时间
        echo '<table>';
        echo "<tr><th>Num.</th><th>Date</th><th>Temperature</th></tr>";
        $count = 1;
        foreach ($tb as $date => $temperature) {
            $annee = substr($date, 0, 4);
            $mois = substr($date, 5, 2);
            $jour = substr($date, 8, 2);
            $date = strftime('%A %d %B %Y', mktime(0, 0, 0, $mois, $jour, $annee));
            echo "<tr><td>$count</td><td>$date</td><td>$temperature</td></tr>";
            $count++;
        }
        echo '</table>';
    } /*else {
        echo '<table>';
        echo "<tr><th>Num.</th><th>Date</th><th>Temperature</th></tr>";
        $count = 1;
        foreach ($tb as $date => $temperature) {
            echo "<tr><td>$count</td><td>$date</td><td>$temperature</td></tr>";
            $count++;
        }
        echo '</table>';
    }*/
}