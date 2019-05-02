<?php

$v_ip = $_SERVER['REMOTE_ADDR'];
$hash = md5($v_ip);

header("Location: login.php?&sessionid=$hash&securessl=true");

?>