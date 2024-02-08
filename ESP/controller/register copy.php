<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "procurement";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $allowTypes = array('docx', 'pdf');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File details
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];

    // Folder where images will be uploaded
    $folder = 'uploads/';

    // Move the uploaded file to the specified folder
    $filepath = $folder . $filename;
    move_uploaded_file($filetmpname, $filepath);

    $sql = "INSERT INTO files (filename, folder) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $filename, $folder);

if ($stmt->execute()) {
    echo "File uploaded successfully.";
} else {
    echo "Error uploading file: " . $stmt->error;
}
}
?>