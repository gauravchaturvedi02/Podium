<?php
session_start();
if(isset($_POST['bttnLogin'])){
    require '../Config/connection.php';
    $admin_name = $_POST['admin_name'];
    $password = $_POST['password'];
    $r = mysqli_query($dbc,'SELECT * FROM admin WHERE admin_name="'.$admin_name.'" && password="'.$password.'"');
                
       if(mysqli_num_rows($r)==1)
    {
       $_SESSION['admin_name']= $admin_name;
       header('Location:dashboard.php');
       
    }
    else{
        echo "Not a valid author";
    }
}
      
?>
 <?php include('Config/css.php');  ?>
  <?php include('Config/js.php');  ?>
<DOCTYPE html></DOCTYPE>
<html>
    <head>
        <title> Admin Login</title>
       <meta name="viewport" content="width=device-width, initial-scale=1"> 
      
    </head>
    <body>
        <div id="wrap">
          
            <div class ='container'>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-info"> 
                      <div class="panel-heading"><strong> Admin Login</strong></DIV>
                      <div class="panel-body">
                     
                         <form method="post">
                    
                    
                             <label for="admin_name">Admin Name</label>
                              <input type="text" name="admin_name">
                    
                    <label for="password">Password</label>
                    <input type="password" name="password">
                  
                    <button type="submit" name="bttnLogin" value="Login">Login</button>
       
</form>
 </div>
                  </div>
                </div> 
            </div>    
            
        </div>      
            
    </div> 
   
  </body>
</html>