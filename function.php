<?php

// function test(引数1, 引数2){
//   // 処理

//   return // 戻り値;
// }


// インプット引数なし
// アウトプット戻り値なし

function test(){
  echo 'テスト';
}

test();

// インプット引数あり
// アウトプット戻り値なし

$comment = 'コメント2';
$comment3 = 'コメント3';

function getComment($string){
  echo $string;
}

getComment($comment3);

?>