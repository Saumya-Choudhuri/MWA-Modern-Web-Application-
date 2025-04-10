<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eid = $_POST['eid'];
    $ename = $_POST['ename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $dept = $_POST['dept'];
    $salary = $_POST['salary'];

    echo "<h2>Submitted Employee Details</h2>";
    echo "Employee ID: $eid <br>";
    echo "Name: $ename <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Mobile: $mobile <br>";
    echo "Department: $dept <br>";
    echo "Salary: $salary <br>";
}
?>
