<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $room = $_POST['id1'];
        $slot = $_POST['slot'];
        $date_in = $_POST['date'];
        $date_out = $_POST['date2'];
        $rooms = $_POST['status'];

        $roomi = $_POST['status'];
       
         $insert = mysqli_query($conn,"INSERT INTO reservations
         (room,slot,date_in,date_out,rooms_name) 
         VALUES ('$room','$slot','$date_in','$date_out', '$rooms')");

        $sql = mysqli_query($conn,"UPDATE rooms SET status=1 WHERE room1='$roomi'");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?category=success");
         }

         
     
    }
        
?>