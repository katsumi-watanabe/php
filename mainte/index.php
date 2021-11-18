<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 3';
// $stmt = $pdo->query($sql);// sql実行 ステートメント

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり prepare, bind, execute 悪意ユーザ delete * SQLインジェクション
$sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダー
$stmt = $pdo->prepare($sql);// プリペアードステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT);// 紐付け
$stmt->execute(); // 実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';