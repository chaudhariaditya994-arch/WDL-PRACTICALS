<!DOCTYPE html>
<html>
<head>
    <title>Personal Profile</title>

    <style>
        body {
            background-color: lightblue;
            font-family: Arial;
            text-align: center;
        }

        img {
            border-radius: 50%;
        }
    </style>
</head>

<body>

<?php
    date_default_timezone_set("Asia/Kolkata");

    echo "<h2>Welcome to My Profile Page</h2>";
    echo "<p>Date: " . date("d-m-Y") . "</p>";
    echo "<p>Time: " . date("h:i:s A") . "</p>";
?>

<h1>My Profile</h1>

<img src="profile.jpg" width="150" height="150">

<p><b>Name:</b> Rahul Sharma</p>

<p><b>Course:</b> BCA</p>

<p><b>Hobby:</b> Coding and Reading</p>

<p>
    <a href="https://www.google.com" target="_blank">
        Visit Google
    </a>
</p>

</body>
</html>