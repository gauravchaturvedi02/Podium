<?php
include('Config/setup.php');
 include('Config/css.php');  
 include('Config/js.php');
include('template/navigation.php');
include ('connect.php');
 $id=$_GET['id'];

$cat_sql="SELECT article.ar_id,article.au_id,article.tagline,article.flag,article.im_name,article.content,article.title,article.au_name,article.date,article.id,pages.label FROM article JOIN pages ON article.id=pages.id WHERE article.flag='1' AND pages.id=".$id." ORDER BY article.date DESC";

     if($cat_query= mysqli_query($dbc,$cat_sql)){
  $cat_r=mysqli_fetch_assoc($cat_query);   
 }
 if(mysqli_num_rows($cat_query)==0 ){
     echo "Sorry! NO post yet!!";
 }else{?>
<title><?php echo $cat_r['label'];?></title>
<h1 style="padding-top: 80px;font-size: 80px" ><strong><?php echo $cat_r['label'];?></strong></h1>
 
    
  

       <?php do{ ?>
       <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms" style="padding-top:5px;padding-left:150px; padding-right:150px">
            
                <div class="row" style="text-align: centre">
                   
                    <div class="col-md-7" >
                        <h2><strong> <a href="article.php?ar_id=<?php echo $cat_r['ar_id']; ?>"><?php echo $cat_r['title']?></strong></a></h2>
                       
                        <p><?php echo $cat_r['tagline']?>.....</p>
                        <p>Author:<?php echo $cat_r['au_name']; ?></p>
                        <p>Posted on:<?php echo $cat_r['date']; ?>
                        <p> <a class="btn btn-default btn-lg"href="article.php?ar_id=<?php echo $cat_r['ar_id']; ?>">Read more <i class="fa fa-arrow-circle-o-right"></i> </a>
                   </p>
                    </div>
                    <div class="col-md-5">
                        <a href="article.php?ar_id=<?php echo $cat_r['ar_id']; ?>">
                            <img src="<?php echo $cat_r['im_name']; ?>" alt="" class="img-responsive">
                        </a>
                    </div>
                
            
</div>
        </section>
       <?php } while($cat_r=mysqli_fetch_assoc($cat_query));
       
       }
            ?>
<?php include('template/footer.php');?>
