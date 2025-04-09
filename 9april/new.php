<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usn = htmlspecialchars($_POST['usn']);
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = $_POST['gender'] ?? 'Not specified';
    $department = $_POST['department'];

    // Display submitted data
    echo "<h2>Student Details Submitted:</h2>";
    echo "USN: $usn <br>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Department: $department <br><hr>";
}
?>