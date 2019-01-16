<?php

$file = "_example.php";

$handler = fopen($file,'w'); //open a file. If file  doesnt exist, create one
fclose($handler);

if($handler = fopen($file,'w'))
{
    fwrite($handler,"hello world"); //to write to a file
    fclose($handler);
}
else
{
    echo "Error writing to files";
}

if($handler = fopen($file,'r'))
{
//    $content = fread($handler,10); //reads 10 bytes
    $content = fread($handler,filesize($file)); //reads the entire file
    echo $content;
    fclose($handler);
}
else
{
    echo 'error reading file';
}

unlink("_example.php"); //to delete a file

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>