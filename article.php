<?php
include('Config/setup.php');
 include('Config/css.php'); 
  include('Config/css.php');
 
 include('Config/js.php');
 include ('connect.php');
if(!isset($_GET['ar_id'])){
    header('Location:home.php');
}
$ar_sql="SELECT * FROM article WHERE ar_id=".$_GET['ar_id'];
  if($ar_query=mysqli_query($dbc,$ar_sql)){
      $ar_rs=mysqli_fetch_assoc($ar_query);
      ?>
 

    <div class="my-container">
        <h1><strong><?php echo $ar_rs['title']; ?></strong></h1>
         <img src="<?php echo $ar_rs['im_name']; ?>">
      </div>
<div class="container">
    <p>Author:<?php echo $ar_rs['au_name']; ?></p>
                                    <p>Posted on:<?php echo $ar_rs['date']; ?>
                                    <p><?php echo $ar_rs['content']; ?></p></div>>
    

  <?php }
  
?>

