<?php
include('Config/setup.php');
 include('../Config/css.php'); 
 include('../Config/js.php');
 include ('connect.php');

$ar_sql="SELECT * FROM article WHERE ar_id=".$_GET['ar_id'];
  if($ar_query=mysqli_query($dbc,$ar_sql)){
      $ar_rs=mysqli_fetch_assoc($ar_query);
      ?>
 

    <div class="my-container">
        <h1 style="padding-top: 500px;"><?php echo $ar_rs['title']; ?></h1>
         <img src="<?php echo $ar_rs['im_name']; ?>">
      </div>
<div class="container">
    <p>Author:<?php echo $ar_rs['au_name']; ?></p>
    <p>Posted on:<?php echo $ar_rs['date']; ?>
    <p><?php echo $ar_rs['content']; ?></p></div>
    

  <?php
  }
  ?> <a href="put_online.php?ar_id=<?php echo $ar_rs['ar_id'];?> "><strong>Put Online</strong><a><br/>


 <?php include('template/footer.php');?>