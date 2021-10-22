<?php

// 文字列の長さ
// 日本語 SJIS,　UFT-8 3~6バイト

$text = 'あいうえお';

// echo strlen($text);

echo mb_strlen($text);

?>