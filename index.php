<?php $ip = $_SERVER['REMOTE_ADDR']; file_put_contents('ips.txt', $ip . PHP_EOL, FILE_APPEND); ?>
