<?php include "dbConnection.php";?>
<?php include "functions.php"?>
<?php
if(isset($_POST['submit']))
{
    createData();
    
}

?>
<?php include "includes/header.php"?>

    
     <div class="container">
    
    <div class="col-xs-6">
         
      <h1 class="text-center">Sign Up</h1>
         <form action="database-create.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
             <input type="text" name="username" class="form-control">
            </div>
        <div class="form-group">
            <label for="password">Password:</label>
             <input type="password" name="password" class="form-control">
            </div>
        
        
             <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
           
        </form>
         
         
         
         
         
         
         
         
         </div>
    
    
    
    </div>
    
<?php include "includes/footer.php"?>