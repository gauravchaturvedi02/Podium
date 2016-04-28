<?php
session_start();
include('../Config/connection.php');

  
if($_POST) {
# $q = "SELECT * FROM users where email='$_POST[email]' AND password=SHA1('$_POST[password]')" ;   
 #$r=  mysqli_query($dbc, $q);
 #$num = mysqli_num_rows($r);
 if(($_POST['email'])=="podium_admin@impetus.com"){
     $_SESSION['admin'] = $_POST['email'];
     header('Location: index.php');
 }  
}
?>
