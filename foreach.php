<?php

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー',
];

// バリューのみ表示
foreach($members as $member){
  echo $member;
}

echo '<br>';

// キーとバリューそれぞれの表示
foreach($members as $member => $value){
  echo $member . 'は' . $value . 'です';
}

echo '<br>';

$members_2 = [
  '本田' => [
  'height' => 170,
  'hobby' => 'サッカー',
  ],
  '香川' => [
  'height' => 165,
  'hobby' => 'サッカー',
  ]
];

foreach($members_2 as $member){
  echo $member;
}
?>