<form method="post" name = "form">
    <p>Введите ваше имя: <input type="text" name="personName"/></p>
    <input type="submit"/>
</form>
<?php
$name = $_POST['personName'];
if($name != '')
{
    echo 'Привет '.$name;
}
