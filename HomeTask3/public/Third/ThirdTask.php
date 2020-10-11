<form method="post" name = "form">
    <p>Введите свой город: <input type="text" name="city"/></p>
    <input type="submit" id="submit" name="submit"/>
</form>
<script>
    document.getElementById('submit').addEventListener('click',function(){
        this.style.display = "none";
    });
</script>
<?php
echo $_POST['city']."<br>";
