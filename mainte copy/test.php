<?php
// パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte copy/test.php
echo '<br>';
// パスワード(暗号化)
echo (password_hash(('password123'), PASSWORD_BCRYPT));
// copy/test.php$2y$10$0cqvj6UgbmA5.Vel3YOqGu6dbh.KKaL3QKmtFNBEQZOWr1w0E9dZa