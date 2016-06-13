<?php
 include('Config/css.php'); 
        include('Config/js.php'); 
        include('Config/setup.php');
        
           if(isset($_GET['ar_id'])){
          echo " are u sure u want to delete the article with id=".$_GET['ar_id'];
          $r = $_GET['ar_id'];
           $ar_sql= mysqli_query($dbc,"DELETE FROM article WHERE ar_id=".$r);
              if($ar_sql){
                  header("Location:dashboard.php");
              
             }
             else {
                 echo "error occured!!";
             }
           }
           
             ?>
