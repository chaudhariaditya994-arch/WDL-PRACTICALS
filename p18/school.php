<!DOCTYPE html>
<html>
<head>
    <title>School Admission Form</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Internal CSS -->
    <style>

        form {
            width: 300px;
            margin: auto;
            background: white;
            padding: 20px;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }

    </style>

</head>

<body>

<h2 style="text-align:center; color:blue;">
    School Admission Form
</h2>

<center>

<img src="school.jpg"
     width="200" height="120">

<br><br>

<a href="https://www.google.com"
   target="_blank">

   Visit School Website

</a>

</center>

<br>

<form method="post">

    Student Name:
    <input type="text" name="name">

    Class:
    <input type="text" name="class">

    Mobile Number:
    <input type="text" name="mobile">

    <input type="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];

    echo "<h3>Student Details</h3>";

    echo "Original Name: " . $name . "<br>";

    echo "Uppercase Name: " .
         strtoupper($name) . "<br>";

    echo "Name Length: " .
         strlen($name) . "<br>";
}

?>

</body>
</html>