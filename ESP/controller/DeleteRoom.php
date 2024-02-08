<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM rooms where id1='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Room Deleted";
        
    }
    else{
        echo"Not able to delete";
        
    }
    
?>