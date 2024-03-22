<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connect.php';

    // Retrieve form data
    $type = $_POST['type'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    // Handle file upload
    $evidence = $_FILES['evidence']['name'];
    $tempFile = $_FILES['evidence']['tmp_name'];
    $uploadDirectory = 'uploads/';
    $targetFile = $uploadDirectory . basename($evidence);
    move_uploaded_file($tempFile, $targetFile);
    $datetime = time();
    $description = $_POST['description'];

    // Insert data into database
    $sql = "INSERT INTO `complaints` (type, state, district, pincode, evidence, datetime, description) 
            VALUES ('$type', '$state', '$district', '$pincode', '$evidence', '$datetime', '$description')";
    $result = mysqli_query($connection, $sql);

    if($result){
        // If insertion was successful, redirect the user
        header('location:index.php');
        exit(); // Stop further execution
    } else {
        echo "Complaint is not submitted";
    }
}
?>
