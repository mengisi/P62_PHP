<?php

function br()
{
    echo '<br/>';
}

function p($contenu)
{
    echo '<p>', $contenu, '</p>';
}

//以下函数必需要先有array
function liste($tb)
{
    echo '<ul>';
    foreach ($tb as $label) {
        echo '<li>', $label, '</li>';
    }
    echo '</ul>';
}

//结尾可以省略 php 结尾符号 因为其后无 HTML