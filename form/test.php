<?php
// パスワードを記録したファイルの場所

echo __FILE__;
// /Applications/MAMP/htdocs/php_test/form/test.php

echo '<br>';
// パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$ypxmCiV0LexqMG8VEdH18u6uRaKScaf8IZnzUENMlewq9opjYgyBC
?>