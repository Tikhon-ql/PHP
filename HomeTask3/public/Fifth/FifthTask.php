<form method="post" name = "form">
    <p>Введите ваше имя: <input type="text" name="personName"/></p>
    <p>Введите ваш возраст: <input type="text" name="personAge"/></p>
    <textarea name="message"></textarea>
    <input type="submit"/>
</form>
<?php
$name = $_POST['personName'];
$age = $_POST['personAge'];
$message = $_POST['message'];
$res = 'Привет, '.$name.', '.$age.' лет.<br>Твое сообщение: '.$message;
if($name != '' && $age != '' && $message != '')
    echo $res;