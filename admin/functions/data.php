<?php
function data_user($dbc,$id){
     if(is_numeric($id)){
        $q = "SELECT * FROM users where id = '$id'";
    }
    else{
        $q = "SELECT * FROM users where email = '$id'";
    }

    $r = mysqli_query($dbc,$q);
    $data = mysqli_fetch_assoc($r);
   
    return $data;
}

function data_page($dbc,$id){
$q = "SELECT * FROM pages where id = $id";
$r = mysqli_query($dbc,$q);
$data = mysqli_fetch_assoc($r);
return $data;
} 

?>