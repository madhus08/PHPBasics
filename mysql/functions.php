<?php include "dbConnection.php";?>
<?php 
function getData()
{
    global $connection;
    $query="select * from users";
        $result = mysqli_query($connection,$query);
    
    if(!$result)
    {
        die('query failed'.mysqli_error());
    }

                 while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
}

function displayData(){
     global $connection;
    $query="select * from users";
        $result = mysqli_query($connection,$query);
    
    if(!$result)
    {
        die('query failed'.mysqli_error());
    }

                 while($row = mysqli_fetch_assoc($result)) {
            print_r($row);
    
                 }
}

function createData()
{
    global $connection;
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    
    $hashFormat = "$2y$10$";
    $salt = "teststringteststring22";
    $hashFormat_and_Salt = $hashFormat . $salt;
    
    $password = crypt($password,$hashFormat_and_Salt);
    
    if($username && $password)
    {
        $query ="insert into users(username,password) values('$username','$password')";
        $result = mysqli_query($connection,$query);
        
        if(!$result)
        {
            die('query failed'.mysqli_error());
        }
        else
        {
            echo "record created";
        }

    }
}

function updateData()
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id= $_POST['id'];   
       // echo "id".$id;
    global $connection;
        $query ="UPDATE users SET username = '$username' , password='$password' WHERE id= $id";
        $result = mysqli_query($connection,$query);
        
        if(!$result)
        {
            die('query failed'.mysqli_error($connection));
        }

    
   
}

function deleteData()
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id= $_POST['id'];   
    global $connection;
        $query ="DELETE FROM users WHERE id= $id";
        $result = mysqli_query($connection,$query);
        
        if(!$result)
        {
            die('query failed'.mysqli_error($connection));
        }
    else
    {
        echo "row deleted";
    }
}

?>