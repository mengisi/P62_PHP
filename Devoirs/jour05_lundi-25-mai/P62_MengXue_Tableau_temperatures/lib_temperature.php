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
    '2015-05-04' => 35.4,    //注意此处如果仅写 4，在排序时将发生错误，应使用规则的写法
);

/**
 * @param array $tb
 */
function afficher_temperatures($tb=array())      //指定该参数只能用于array
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

function afficher_temperatures_2($tb, $trier_date=false)  //$trier_date=false 表示可以不填此参数,此参数最好放在最后一个
{
    if ($trier_date) {      //  若填参数的话，无论任何参数均表示true; 若不填，则默认false（上一行已声明默认false）
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

function afficher_temperatures_3(&$tb, $trier_date=false, $date_fmt)
{
    if ($trier_date) {       //  若填参数的话，无论任何参数均表示true
        ksort($tb);
    }
    if ($date_fmt == 'date_fmt') {
        setlocale(LC_TIME, 'fra_fra');                               //设置法语时间
        echo '<table>';
        echo "<tr><th>Num.</th><th>Date</th><th>Temperature</th></tr>";
        $count = 1;
        foreach ($tb as $date => &$temperature) {

           /* $annee = substr($date, 0, 4);
            $mois = substr($date, 5, 2);
            $jour = substr($date, 8, 2);
            $date = strftime('%A %d %B %Y', mktime(0, 0, 0, $mois, $jour, $annee));*/

            $coupe_date=explode('-',$date);                         //explode 非常有用，用于分割某个字符串,不用象上面那样用substr了。 就象javascript 中的 split函数
            $annee=$coupe_date[0];            // explode的反义词是 implode ！！！
            $mois=$coupe_date[1];
            $jour=$coupe_date[2];
            $date = ucfirst(strftime('%A %d %B %Y', mktime(0, 0, 0, $mois, $jour, $annee)));



            echo "<tr><td>$count</td><td>$date</td><td>$temperature</td></tr>";
          //  $temperature=$count;
            $count++;
//                              如果用&来修改array，可以改其valeur，但无法改key，key很难修改
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