<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $room = $_POST['date_in'];
        $room1 = $_POST['date_out'];
        $room2 = $_POST['q_slot'];
        $room3 = $_POST['q_room'];
        
       
        $insert = mysqli_query($conn,"INSERT INTO reservations
        (room,slot,date_in,date_out) 
        VALUES ('$room3','$room2','$room','$room1')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?size=success");
         }
     
    }
        
?>