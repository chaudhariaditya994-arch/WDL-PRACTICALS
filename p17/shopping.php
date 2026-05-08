<!DOCTYPE html>
<html>
<head>
    <title>Shopping Site Registration</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightyellow;
        }

        form {
            width: 300px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 600px) {

            form {
                width: 90%;
            }

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

            if (!email.includes("@")) {
                alert("Enter valid Email");
                return false;
            }

            return true;
        }

    </script>

</head>

<body>

<h2 align="center">
    Shopping Site Registration
</h2>

<form name="myForm"
      method="post"
      onsubmit="return validateForm()">

    Name:
    <input type="text" name="name">

    Email:
    <input type="text" name="email">

    Mobile Number:
    <input type="text" name="mobile">

    Address:
    <input type="text" name="address">

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Entered Details</h3>";

    echo "Name: " .
         $_POST["name"] . "<br>";

    echo "Email: " .
         $_POST["email"] . "<br>";

    echo "Mobile: " .
         $_POST["mobile"] . "<br>";

    echo "Address: " .
         $_POST["address"] . "<br>";
}

?>

</body>
</html>