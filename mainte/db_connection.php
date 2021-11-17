<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'katsumi1124';

// 例外処理(データ接続確認) Exception
try{
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FRTCH_ASSOC, //連想配列
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //例外
    PDO::ATTR_EMULATE_PREPARES => false, // SQLインジェクション対策
  ]);
  echo '接続成功';
} catch(PDOException $e){
  echo '接続失敗' . $e->getMessage() . "\n";
  exit();
}