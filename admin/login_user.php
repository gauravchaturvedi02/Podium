<?php
session_start();
if(isset($_POST['bttnLogin'])){
    require '../Config/connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $r= mysqli_query($dbc,'SELECT * FROM users WHERE username="'.$username.'" && password="'.$password.'"');
                
                          if(mysqli_num_rows($r)==1){
       $_SESSION['username']= $username;
       header('Location:index.php');
       
    }
    else{
        echo "Not a valid author";
    }
}
      
?>
<DOCTYPE html></DOCTYPE>
<html>
    <head>
        <title>Login</title>
       <meta name="viewport" content="width=device-width, initial-scale=1"> 
       <?php include('Config/css.php');  ?>
       <?php include('Config/js.php');  ?>
    </head>
    <body>
        <div id="wrap">
          
            <div class ='container'>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-info"> 
                      <div class="panel-heading"><strong>Login</strong></DIV>
                      <div class="panel-body">
                     
                         <form method="post">
                    
                    
                             <label for="username">Username</label>
                              <input type="text" name="username">
                    
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