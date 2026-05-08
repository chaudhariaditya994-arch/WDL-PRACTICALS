<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration Form</title>

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

            var name = document.forms["empForm"]["name"].value;
            var email = document.forms["empForm"]["email"].value;

            if (name == "") {
                alert("Name cannot be empty");
                return false;
            }

            if (email == "") {
                alert("Email cannot be empty");
                return false;
            }

            if (!email.includes("@")) {
                alert("Enter valid email");
                return false;
            }

            return true;
        }

    </script>

</head>

<body>

<h2 align="center">Employee Registration Form</h2>

<form name="empForm" method="post"
      onsubmit="return validateForm()">

    Employee Name:
    <input type="text" name="name">

    Email:
    <input type="text" name="email">

    Department:
    <input type="text" name="department">

    Mobile:
    <input type="text" name="mobile">

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Employee Details</h3>";

    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Department: " . $_POST["department"] . "<br>";
    echo "Mobile: " . $_POST["mobile"] . "<br>";
}

?>

</body>
</html>