<?php
$array = file('data.log');
foreach($array as $val){
    list($id,$name,$price) = explode(',',$val);
    if($id == $_GET['id']){
        $detail_body = "<div>{$name}<br />{$price}円</div>\n";
        break;
    }
}
echo "{$detail_body}\n<p><a href=\"test_list.php\">前に戻る</a></p>";
?>
