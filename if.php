<?php

// if (条件){
//   条件が真なら実行
// }

// if(条件){
//   条件は真なら実行
// } else {
//   条件が偽なら実行
// }


// var_dump($height);

// $height = 90;

// if ($height == 91){// 条件は数字
//   echo '身長は' . $height . 'cmです';
// } else {
//   echo '身長は' . $height . 'cmではありません';
// }

// if文は単体の方がわかりやすい

$height = 94;

// if ($height >= 91){// 条件は数字
//   echo '身長は' . $height . 'cmです';
// }

// if ($height <= 90){// 条件は数字
//   echo '身長は' . $height . 'cmになります';
// }

if ($height != 90){
  echo '身長は90cmではありません。';
}

// データが入っているかどうか
// isset empty is_null

$test = '1';

if (!empty($test)){
  echo '変数は空ではありません';
}

// if (empty($test)){
//   echo '変数は空です';
// } else {
//   echo '変数は空ではありません';
// }

// $signal = 'blue';

// if ($signal === 'red'){
//   echo '止まれ';
// } else if ($signal === 'yellow') {
//   echo '一旦停止';
// } else {
//   echo '進む';
// }

// $speed = 80;
// if ($signal === 'blue'){
//   if ($speed >= 0){ // ネスト
//     echo 'スピード違反';
//   }
// }



// == 一致
// ===　型も一致

// $signal_1 = 'red';
// $signal_2 = 'yellow';

// if($signal_1 === 'red' || $signal_2 === 'blue'){
//   echo '赤と青です';
// }

// 三項演算子
// if else
// 条件？　真：偽

$math = 80;
$comment = $math > 80 ? 'good' : 'not good';
echo $comment;


?>