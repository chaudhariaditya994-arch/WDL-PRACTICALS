<!DOCTYPE html>
<html>
<head>
    <title>Gym Membership Form</title>

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

            var mobile =
            document.forms["myForm"]["mobile"].value;

            var email =
            document.forms["myForm"]["email"].value;

            if (mobile.length != 10) {
                alert("Enter valid 10 digit mobile number");
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

<h2 align="center">Gym Membership Registration</h2>

<form name="myForm"
      method="post"
      onsubmit="return validateForm()">

    Name:
    <input type="text" name="name">

    Email:
    <input type="text" name="email">

    Mobile Number:
    <input type="text" name="mobile">

    <input type="submit" value="Register">

</form>

<?php

$plans = array(
    "Basic Plan",
    "Monthly Plan",
    "Yearly Plan"
);

echo "<h3>Membership Plans</h3>";

foreach($plans as $plan) {

    echo $plan . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Registered Details</h3>";

    echo "Name: " . $_POST["name"] . "<br>";

    echo "Email: " . $_POST["email"] . "<br>";

    echo "Mobile: " . $_POST["mobile"] . "<br>";
}

?>

</body>
</html>