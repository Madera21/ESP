<?php
 
include_once('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT company_name, password, admin1 FROM accounts");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['company_name'] == $username) &&
            ($user['password'] == $password)) {
            if ($user['admin1'] == 1) { header("location: ./Admin/Index.php ");
        }
            else{
                die();
            }
        }


        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            
            die();
        }
    }
}

?>