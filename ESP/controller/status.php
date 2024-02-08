<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    
    
    $query="UPDATE rooms SET status=0 WHERE room1='$id'";
    
    $data=mysqli_query($conn,$query);

    if($data){
        echo"Reservation Deleted";
        
    }
    else{
        echo"Not able to delete";
        
    }
    
?>