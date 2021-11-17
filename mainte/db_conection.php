<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1;charset=utf-8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'katsumi1124';

$pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);


// 例外処理(データ接続確認) Exception
try{} catch(PDOException $e){
  echo '接続失敗' . $e->getMessage() . "\n";
  exit();
}