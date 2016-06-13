 <?php
session_start();
if(!isset($_SESSION['admin_name'])){
    header('Location:login_admin.php');  
    echo 'WELCOME'.$_SESSION['admin_name'];
}
?>
<title>Dashboard | JSS Podium </title>
       <meta name="viewport" content="width=device-width, initial-scale=1"> 
       <?php
        include('Config/css.php'); 
        include('Config/js.php'); 
        include('Config/setup.php');
       
        $c_sql="SELECT * FROM article ORDER BY date DESC";
        
        $result = mysqli_query($dbc,$c_sql);
        $row = mysqli_fetch_assoc( $result );
      ?>
        <div id="wrap">
          <?php include('template/navigation2.php'); ?>
       <div class="container">
           
           <h1 style="text-align-last:center">ADMIN DASHBOARD</h1>
       </div>
       <table class="TFtable">
      <thead>
        <tr>
          <th>Title</th>
          <th>Tagline</th>
          
          <th>Author</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
         do{
             ?> <tr>
              <td><?php echo $row['title'];?></td>
              <td><?php echo $row['tagline'];?></td>
             
              <td><?php echo $row['au_name'];?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php 
            if($row['flag']==1){
                ?> <a href="delete_post.php?ar_id=<?php echo $row['ar_id']; ?>"><i class="fa fa-trash-o "></i>/<br/></a><a href="put_offline.php?ar_id=<?php echo $row['ar_id']; ?>">Put offline</a>

                 <?php
            } else{ ?>
                <a href="model_article.php?ar_id=<?php echo $row['ar_id'];?> ">Show model article</a><br/>
                <?php }
                 ?>

   
             
                </td>
              
              </td> 
            </tr>
                <?php
          }while($row = mysqli_fetch_assoc( $result ) );
        ?>
      </tbody>
    </table>

 

  