<?php
// Check if the form was submitted
if (isset($_POST['register'])) {
    
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "procurement";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $allowTypes = array('docx', 'pdf');

    if(isset($_POST['register']))
    {
       
    
        $Cname= $_POST['CompanyName'];
        $Emai= $_POST['Email'];
        $Pass = $_POST['Password'];
        $Cont = $_POST['Contact number'];
        $date = date("Y-m-d") ;
        $_POST['date'] = $date;
        
       
         $insert = mysqli_query($conn,"INSERT INTO accounts (company_name, email, reg_date, contact_num, password) VALUES ('$Cname', '$Emai', '$date', '$Cont', '$Pass')");

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
}
?>