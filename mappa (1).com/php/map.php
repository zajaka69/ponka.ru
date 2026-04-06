<?php
try {
	$dbh = new PDO('mysql:dbname=db_name;host=127.0.0.1', 'логин', 'пароль');
} catch (PDOException $e) {
	die($e->getMessage());
}

?>