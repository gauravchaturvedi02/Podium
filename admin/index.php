<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:login.php');    
}
?>

<?php include('Config/setup.php');?>
<DOCTYPE html></DOCTYPE>
<html>
    <head>
        <title><?php echo 'adminPanel | JSS Podium' ;?></title>
       <meta name="viewport" content="width=device-width, initial-scale=1"> 
       <?php include('Config/css.php');  ?>
       <?php include('Config/js.php');  ?>
    </head>
    <body>
        <div id="wrap">
          <?php include('template/navigation.php'); ?>
                      <?php
                    if(isset($_POST['submitted']) == 1){
                        $title=  mysqli_real_escape_string($dbc, $_POST['title']);
                        $content=  mysqli_real_escape_string($dbc, $_POST['content']);
                        $au_name=  mysqli_real_escape_string($dbc, $_POST['au_name']);
                        
                         $tagline=  mysqli_real_escape_string($dbc, $_POST['tagline']);
                        
                        
                        
                        $category = $_POST['category'];
                        if(empty($category)) 
		{
			$errorMessage = "<li>You forgot to select a category!</li>";
		}
                        else 
		{
			
			$id= 0;
			switch($category)
			{
                                case "startup": $id = 1; break;
				case "sci&tech": $id = 2; break;
				case "sports": $id = 3; break;
				case "politic": $id = 4; break;
				case "entertainment": $id = 5; break;
                                case "cat6": $id = 6; break;
                                case "cat7": $id = 7; break;
                         
		
				default: echo("Error!"); exit(); break;
			}
	
		}
	                $file= $_FILES['image']['tmp_name'];
                        $name = basename($_FILES['image']['name']);
                        $dir='images';
                        #$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
                        if(move_uploaded_file($file, "../".$dir."/".$name)){
                            echo 'file uploaded successfully.';
                        }else{
                            echo 'upload failed';
                        }
                        $im_name=$dir."/".$name ;
        $q ="INSERT INTO article (title,content,au_name,date,id,im_name,tagline,time)"
             . " VALUES ('$title','$content','$au_name',CURDATE(),'$id','$im_name','$tagline',CURTIME())";
                        $r = mysqli_query($dbc,$q);
                    
                    if($r){ 
                        $m = '<p>Article was added!!</p>';
                        
                    }
                    else{
                        $m= '<p>Article could not be loaded because '.mysqli_errno($dbc);
                        $m.= '<p>'.$q.'</p>';
                    }
                    }
                    ?>       
                </div>
                </div>
                <div class="container">
                     <h1>Admin Dashboard</h1>
                   <?php if(isset($m)) {echo $m ; }?>
                    <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                       <div class="form-group">
                           <label for="title">Title:</label>
                           <input class="form-control" type="text" name="title" id="title" placeholder="Article Title"> 
                            <label for="tagline">Tagline:</label>
                           <input class="form-control" type="text" name="tagline" id="tagline" placeholder="short description">
                           <label for="content">Content:</label>
                           <textarea class="form-control" name="content" id="content" rows="8">
                           </textarea>
                            <label for="au_name">Author:</label>
                           <input class="form-control" type="text" name="au_name" id="au_name" placeholder="Eg.Gaurav Chaturvedi"> 
                            
                            <label for="image">Choose Image:</label>
                            <input type="file" name="image" id="image" placeholder="choose ur imaage"><input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                         <label for='category'>Select the category</label><br>
	                         <select name="category">
		             
		              <option value="">Select a category...</option>
                              <option value="sci&tech">Science and Tech</option>
		              <option value="startup">Start Ups</option>
		              <option value="sports">Sports</option>
		              <option value="politics">Politics</option>
		              <option value="entertainment">Entertainment</option>
                              <option value="cat6">Cat6</option>
                              <option value="cat7">Cat7</option>
		
	                                </select> 
                       </div>
                           <button type="submit" class="btn btn-default">Save</button>
                           <input type="hidden" name="submitted" value="1">
                       </div>
                        
                    </form>
                </div>
            </div>
        </div>
         <?php include('template/footer.php'); ?>
    </body>
</html>
       