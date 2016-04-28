<?php 
include('Config/css.php'); 
include('Config/js.php');
include('Config/setup.php');
include ('connect.php');
include('Config/connection.php');
?>
<?php include('template/navigation.php');?>
    </head>
    <body>
         <div class="my-container">
        <h1><strong> THE PODIUM </strong></h1>
        <img src="images/i-should-buy-a-boat.jpg">
      </div>
        <?php
        $g="SELECT * FROM pages";
        $gq=mysqli_query($dbc,$g);
        $rq = mysqli_fetch_assoc($gq);
     do{
         
       ?>
        <h1><?php echo($rq['label']);  ?></h1>
       <?php
       for($cur_id =0; $cur_id <8; $cur_id++ ){
              
     $sq ="SELECT article.ar_id,article.au_id,article.tagline,article.flag,article.im_name,article.content,article.title,article.au_name,article.date,article.id,pages.label FROM article JOIN pages ON article.id=pages.id WHERE article.flag='1' AND article.ar_id=".$cur_id ;
     $squery=  mysqli_query($dbc, $sq);
       $rsq = mysqli_fetch_assoc($squery);
      ?>
         <h3><?php echo $rsq['title'];?></h3>
     
      
           <?php } }while($rq = mysqli_fetch_assoc($gq));