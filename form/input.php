<?php

// CSRF 偽物のinput.php->悪意のあるページ
session_start();

// 重ねて表示することができない様に(透明のボタンを設置して変なURLに飛ばない様に帽子)
header('X-FRAME-OPTIONS:DENY');


// スーパーグローバル変数 php 9種類
// 連想配列

// if(!empty($_POST)){
//   echo '<pre>';
//   var_dump($_POST);
//   echo '</pre>';
// }


// jsコードが記入できない様に
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 入力、確認、完了 input.php, confirm.php, thanks.php
// input.php

$pageFlag = 0;

if(!empty($_POST['btn_confirm'])){
  $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])){
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<?php if($pageFlag === 0) : ?>
<?php

if(!isset($_SESSION['csrfToken'])){
  $csrfToken =  bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>
<!-- 入力画面 -->
<form method="POST" action="input.php">
氏名
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);}?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);}?>">
<br>
<input type="submit" name="btn_confirm" value="確認する">
<input type="hidden" name="csrf" value="<?php echo $token?>">
</form>
<?php endif; ?>

<?php if($pageFlag === 1) : ?>
<!-- 確認画面 -->
<form method="POST" action="input.php">
氏名
<?php echo h($_POST['your_name']);?>
<br>
メールアドレス
<?php echo h($_POST['email']);?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']);?>">
<input type="hidden" name="email" value="<?php echo h($_POST['email']);?>">
</form>
<?php endif; ?>

<?php if($pageFlag === 2) : ?>
<!-- 完了画面 -->
送信が完了しました。
<?php endif; ?>



</body>

</html>