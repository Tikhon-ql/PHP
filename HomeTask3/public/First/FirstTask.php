<form method="post" name = "form">
    <p>Введите свой город: <input type="text" name="city"/></p>
    <input type="submit"/>
</form>
<?php
echo $_POST['city']."<br>";