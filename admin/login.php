
<?php
include('admin.php');
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
          <?php #include('template/navigation.php'); ?>
            <div class ='container'>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-info"> 
                      <div class="panel-heading"><strong>Login</strong></DIV>
                      <div class="panel-body">
                    
                      <form action="login.php" method="post" role="form">
                       <div class="form-group">
                       <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
     <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
     </div>
  
     <button type="submit" class="btn btn-default">Submit</button>
  </form>
                      </div>
                  </div>
                </div> 
            </div>    
            
        </div>      
            
    </div> 
    <?php include('template/footer.php'); ?>
  </body>
</html>
       