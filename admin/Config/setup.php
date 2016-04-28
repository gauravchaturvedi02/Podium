<?php
//dbconnect
include('../Config/connection.php');
#function call 
include('functions/data.php');
include('functions/template.php');

if(isset($_GET['page'])){
    $pageid=$_GET['page'];
    
}
else{
 $pageid=1;   
}
#page setup
$page = data_page($dbc,$pageid);

?>