<!DOCTYPE html>
<html>
<body>

<h3>Student Form</h3>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Save">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "college35");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (name, age)
            VALUES ('$name', '$age')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data";
    }
}
?>

</body>
</html>