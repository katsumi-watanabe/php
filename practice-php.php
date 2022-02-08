<?php
$a=1;
function tasuichi(){
        global $a;
        print ($a+1);
}
tasuichi();


$b = 9876;
function zeikomi(){
  global $b;
  echo floor($b*1.08);
}

zeikomi();

$data_1 = array(“PHP”,”図書館”,”のサンプルです”);
$data_2 = array(“配列”,”同士を”,”結合します”);

echo implode($data_1);
echo implode($data_2);