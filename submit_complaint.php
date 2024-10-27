<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connect.php'; // Make sure this file includes database connection code

    // Retrieve form data
    $type = $_POST['type'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode']; // Add this line to retrieve pincode
    $description = $_POST['description'];

    // Handle file upload
    $evidence = $_FILES['evidence']['name'];
    $tempFile = $_FILES['evidence']['tmp_name'];
    $uploadDirectory = 'uploads/';
    $targetFile = $uploadDirectory . basename($evidence);
    move_uploaded_file($tempFile, $targetFile);

    // Insert data into database
    $sql = "INSERT INTO `complaints` (type, state, district, pincode,evidence, description) 
            VALUES ('$type', '$state', '$district', '$pincode','$targetFile', '$description')";
    $result = mysqli_query($connection, $sql);

    if($result){
        // If insertion was successful, set the success message
        $success_msg = "Complaint submitted successfully";
    } else {
        // If there was an error, set an error message
        $error_msg = "Error: " . mysqli_error($connection);
    }
}

// Output JavaScript alert based on success or error message
if(isset($success_msg)) {
    echo "<script>alert('$success_msg'); window.location='index.php';</script>";
} elseif(isset($error_msg)) {
    echo "<script>alert('$error_msg');</script>";
}
$connection->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Complaint</title>
    <style>
        *{
            background-image:url("https://www.humanium.org/en/wp-content/uploads/2020/01/shutterstock_648575884-scaled.jpg");
            background-attachment: fixed;
            background-position:auto;
            background-repeat:no-repeat;
            background-size:cover;
        }
    </style>
</head>
<body>

</body>
</html>
