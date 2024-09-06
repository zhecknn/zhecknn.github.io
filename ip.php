<?php
// Kullanıcının IP adresini almak
$user_ip = $_SERVER['REMOTE_ADDR'];

// IP adresini ekrana yazdırmak
echo htmlspecialchars($user_ip);
?>
