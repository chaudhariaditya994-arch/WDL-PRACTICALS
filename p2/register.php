<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>
        body {
            font-family: Arial;
            background-color: lightblue;
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

            var name = document.forms["myForm"]["name"].value;
            var mobile = document.forms["myForm"]["mobile"].value;

            if (name == "") {
                alert("Enter Name");
                return false;
            }

            if (mobile.length != 10) {
                alert("Enter 10 digit mobile number");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

<h2 align="center">Student Registration Form</h2>

<form name="myForm" method="post" onsubmit="return validateForm()">

    Name:
    <input type="text" name="name">

    Email:
    <input type="email" name="email">

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    DOB:
    <input type="date" name="dob">

    Mobile:
    <input type="text" name="mobile">

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Submitted Details</h3>";

    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "DOB: " . $_POST["dob"] . "<br>";
    echo "Mobile: " . $_POST["mobile"] . "<br>";
}

?>

</body>
</html>