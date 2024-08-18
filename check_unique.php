<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputValue = $_POST["input_value"];

    // Establish a database connection (similar to previous examples)
   include 'coonection.php';
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check uniqueness in the database
    $query = "SELECT * FROM sellerreg WHERE adhar = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $inputValue);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Value is not unique. It already exists in the database.";
    } else {
        echo "Value is unique. It does not exist in the database.";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
