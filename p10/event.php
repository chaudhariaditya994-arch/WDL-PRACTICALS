<!DOCTYPE html>
<html>
<head>
    <title>Event Registration Form</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightgreen;
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

            var email =
            document.forms["myForm"]["email"].value;

            if (name == "") {
                alert("Enter Name");
                return false;
            }

            if (email == "") {
                alert("Enter Email");
                return false;
            }

            alert("Registration Successful!");

            return true;
        }

    </script>

</head>

<body>

<h2 align="center">Event Registration Form</h2>

<form name="myForm"
      method="post"
      onsubmit="return validateForm()">

    Name:
    <input type="text" name="name">

    Email:
    <input type="email" name="email">

    Event Name:
    <input type="text" name="event">

    Mobile Number:
    <input type="text" name="mobile">

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Registered Details</h3>";

    echo "Name: " . $_POST["name"] . "<br>";

    echo "Email: " . $_POST["email"] . "<br>";

    echo "Event Name: " . $_POST["event"] . "<br>";

    echo "Mobile Number: " . $_POST["mobile"] . "<br>";
}

?>

</body>
</html>