<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
    
        $Pname = $_POST['Pname'];
        $Pbud = $_POST['proposed_Budget'];
        $Cdate = $_POST['closing_Date'];
        $Pmode = $_POST['procurement_mode'];
        $date = date("Y-m-d") ;
        $_POST['date'] = $date;
        
       
         $insert = mysqli_query($conn,"INSERT INTO project (Pname, proposed_Budget, publication_Date, closing_Date, procurement_mode) VALUES ('$Pname', '$Pbud', '$date', '$Cdate', '$Pmode')");

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