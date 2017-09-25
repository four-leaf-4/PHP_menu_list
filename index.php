<?php
require 'config.php';
require 'functions.php';
echo (menu($arr));
print_r (array_column($arr, 'title'));

foreach ($arr as $value) {
  echo $value['title'];
    echo $value['children']['title'];
}
