<?php 
include('Config/css.php'); 
include('Config/js.php');
include('Config/setup.php');
include ('connect.php');
include('Config/connection.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<html>
    <head>
        <title>JSS Podium</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="assets/css/ie6.css" />
<script type="text/javascript" src="assets/js/unitpngfix.js"></script>
<![endif]-->
<script type="text/javascript" src="javascript.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
  <?php include('template/navigation.php');?>
    </head>
    <body>
         <div class="my-container">
        <h1><strong> THE PODIUM </strong></h1>
        <img src="images/i-should-buy-a-boat.jpg">
      </div>
       
        <div id="body">
 
    <div id="content">
  <?php
    
 $q ="SELECT article.ar_id,article.au_id,article.tagline,article.flag,article.im_name,article.content,article.title,article.au_name,article.date,article.id,pages.label FROM article JOIN pages ON article.id=pages.id WHERE article.flag='1' ORDER BY article.date DESC LIMIT 8"; 
  if($h_query = mysqli_query($dbc,$q))
     $h_r =mysqli_fetch_assoc($h_query);
      
      
     ?> <h1>Featured Post</h1>
      <div class="break"></div>
       <div class="container">
      <div class="featured-img">
        <div id="featured">
          <div class="featured">
               
            <ul class="photo">
              
                <li class="first"><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><img src="<?php echo $h_r['im_name']; ?>" alt="" /></a></li>
                
            </ul>
              <ul class="text">
              <li class="first">
                <h2><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"></a><?php echo $h_r['title']?></h2>
                <p><?php echo $h_r['tagline']?></p>
                <a class="next" href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>">Read Full Story</a> </li>
                 </ul>
          </div>
        </div>
      </div>
      </div>
      <h1>Recent Posts</h1>
    <?php
      do{ ?>
       <div class="post"> 
         <div class="row">
      <div class="col-md-3"> 
         <a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><img src="<?php echo $h_r['im_name']; ?>" alt=""/></a>
                       </div>
                       <div class="col-md-9">
                           <h1><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></h1>
           <p><?php echo $h_r['tagline']?></p>
        <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<?php echo $h_r['label']?></p>
                       </div></div>
      <!-- end post -->
      <div class="break"></div>
        </div>
      
          <?php  
    }while($h_r =mysqli_fetch_assoc($h_query));
    ?>
             
    </div>
     </div>
        
       <br/>
    <br/><br/><br/><br/>
    <br/><br/><br/>
    
    
    </body>
</html>
       