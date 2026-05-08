<!DOCTYPE html>
<html>
<head>
    <title>Hostel Registration Form</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightgray;
        }

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

    <script>

        function validateForm() {

            var name =
            document.forms["myForm"]["name"].value;

            var mobile =
            document.forms["myForm"]["mobile"].value;

            if (name == "") {
                alert("Enter Student Name");
                return false;
            }

            if (mobile.length != 10) {
                alert("Enter valid mobile number");
                return false;
            }

            return true;
        }

    </script>

</head>

<body>

<h2 align="center">Hostel Registration Form</h2>

<form name="myForm"
      method="post"
      onsubmit="return validateForm()">

    Student Name:
    <input type="text" name="name">

    Course:
    <input type="text" name="course">

    Mobile Number:
    <input type="text" name="mobile">

    Room Type:
    <input type="text" name="room">

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Room Allocation Details</h3>";

    echo "Student Name: " .
         $_POST["name"] . "<br>";

    echo "Course: " .
         $_POST["course"] . "<br>";

    echo "Mobile Number: " .
         $_POST["mobile"] . "<br>";

    echo "Allocated Room: " .
         $_POST["room"] . "<br>";
}

?>

</body>
</html>