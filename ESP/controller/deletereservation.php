<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    
    $query="DELETE FROM reservations where id='$id'";
    
    $data=mysqli_query($conn,$query);

    if($data){
        echo"Reservation Deleted";
        
    }
    else{
        echo"Not able to delete";
        
    }
    
?>