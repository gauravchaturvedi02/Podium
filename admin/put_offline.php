<?php
 include('Config/css.php'); 
        include('Config/js.php'); 
        include('Config/setup.php');
        
           if(isset($_GET['ar_id'])){
         
          $r = $_GET['ar_id'];
          $ar_sql= mysqli_query($dbc,"SELECT * FROM article WHERE ar_id=".$r);
          $ar_row = mysqli_fetch_assoc($ar_sql);
           $query = mysqli_query($dbc,"UPDATE article SET flag='0' WHERE ar_id=".$r);
           if($query) {
                  header("Location:dashboard.php");
              
             }
             else {
                 echo "error occured!!";
             }
           }
           
             ?>
