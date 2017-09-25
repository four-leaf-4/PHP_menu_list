<?php

function menu($arr) {
    echo "<ul>";
    foreach ($arr as $val) {

        if (!empty($val['children'])) {
            echo "<li>".'<a href="content/'.(config('pretty_uri') || $val['title'] == '' ? '' : '?page=').$val['title'].'">'. $val['title'].'</a>';
            menu($val['children']);
            echo "</li>";
        } else {
            echo "<li>".'<a href="content/'.(config('pretty_uri') || $val['title'] == '' ? '' : '?page=').$val['title'].'">'. $val['title'].'</a>'. "</li>";
        }
    }
    echo "</ul>";
}
