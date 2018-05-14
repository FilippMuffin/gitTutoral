<?php
$array = array();

$text = 'foo foo@bar.lol bar lol baz baz@qwe.asdf qwe asdf';
preg_match_all('/([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+/i', $text, $M, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
foreach ($M as $e) {
    $array[] =$e[0] [0];
    }
print_r($array)
?>