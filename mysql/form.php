<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    User Name:<input type="text" name="userName"/><br/>
        Password:<input type="password" name="password"/><br/>
        <input type="submit" name="submit" value="submit"/>
    
    
    </form>
<?php
    if(isset($_POST['submit']))
    {
        echo"Hello";
    }
    ?>
</body>
</html>