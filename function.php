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

// インプット引数なし
// アウトプット戻り値あり

function getNumberOfComment(){
  return 5;
}

$commentNumber = getNumberOfComment();

echo getNumberOfComment();

echo $commentNumber;

// echo getNumberOfComment();
// var_dump(getNumberOfComment());

// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2){
  $int = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3,5);

echo $total;

?>