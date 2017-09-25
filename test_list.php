<?php
$array = file('data.log');
$list_body = "";
foreach($array as $val){
    list($id,$name,$price) = explode(',',$val);
    $list_body .= "<li><a href=\"test_detail.php?id={$id}\">{$name}</a></li>\n";
}
echo "<p>商品一覧</p>\n<ul>\n{$list_body}</ul>";
?>
