<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM queries where id='$id'";
    
    

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Queries Deleted";
        header("Location: ../index.php?size=success");
        
    }
    else{
        echo"Not able to delete";
        header("Location: ../index.php?size=success");
        
    }
    
?>