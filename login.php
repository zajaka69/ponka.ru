<?php

$first_name =  !empty($_POST['first_name']) ? $_POST['first_name'] : 'не ведена ';
$last_name = !empty($_POST['last_name']) ? $_POST['last_name'] : 'не ведено';
$email =  !empty($_POST['email']) ? $_POST['email'] : 'обязателное поле ';
$password = !empty($_POST['password']) ? $_POST['password'] : 'пароль не передан';
$password_confirm = !empty($_POST['password_confirm']) ? $_POST['password_confirm'] : 'пароль не передан';
$terms =  !empty($_POST['terms']) ? $_POST['terms'] : 'пароль не передан';
print_r($_POST);


if ($first_name == 'зайцева' and $password == '123'){
    require('my.php');
}
else{
  echo "не правильно";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Знакомство с GET запросами</title>
</head>
<body>
<?= $first_name; ?>

</body>
</html>

