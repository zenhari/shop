<?php
// Ensure that the file upload is successful before moving the file
if (isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
    // Use the correct superglobal variable $_FILES (not $_FILE)
    $uploadDir = '../images/'; // Specify the directory where you want to save the uploaded file
    $uploadFile = $uploadDir . basename($_FILES['picture']['name']);

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile)) {
        // File upload was successful
    } else {
        // Handle the error if the file could not be moved
        echo "File upload failed.";
        exit;
    }
} else {
    // Handle the error if the file was not uploaded successfully
    echo "No file uploaded or there was an upload error.";
    exit;
}

// Include the database connection
include("../conn.php");

// Sanitize user input to prevent SQL injection
$title = mysqli_real_escape_string($conn, $_POST['title']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

// Prepare the SQL insert statement
$sql_insert = "INSERT INTO products (title, description, price, picture) VALUES ('$title', '$description', '$price', '$uploadFile')";

// Execute the query and check for errors
if (mysqli_query($conn, $sql_insert)) {
    // Redirect to index.php with a success message
    header("Location: index.php?new=success");
} else {
    // Handle the error if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>