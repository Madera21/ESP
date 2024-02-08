

<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "procurement";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File details
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $folder = 'uploaded';

    // Read the file content
    $fileContent = file_get_contents($fileTmpName);

    // Insert into the database
    $sql = "INSERT INTO files (filename, filedata) VALUES ('$fileName')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $fileName, $fileContent);
    
    if ($stmt->execute()) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>