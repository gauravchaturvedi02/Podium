<?php

function data_page($dbc,$id){
$q = "SELECT * FROM pages where id = $id";
$r = mysqli_query($dbc,$q);
$data = mysqli_fetch_assoc($r);
return $data;
} 
?>





<?php
#$data['body_nohtml']= strip_tags($data['content']);
#if($data['content']== $data['body_nohtml']){
#$data['body_fmt']='<p>'.$data['body_nohtml'].'</p>';
#}else{
 # $data['body_fmt']=$data['content']; 
#}


?>