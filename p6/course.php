<!DOCTYPE html>
<html>
<head>
    <title>Course Enrollment</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightyellow;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td, th {
            padding: 10px;
        }

    </style>
</head>

<body>

<h2 align="center">Course Enrollment Page</h2>

<!-- Main Table -->

<table border="1">

    <tr>
        <th>Course Category</th>

        <th>Course Details</th>
    </tr>

    <tr>

        <td>Computer Courses</td>

        <td>

            <!-- Nested Table -->

            <table border="1">

                <tr>
                    <th>Course</th>
                    <th>Duration</th>
                </tr>

                <tr>
                    <td>PHP</td>
                    <td>3 Months</td>
                </tr>

                <tr>
                    <td>Java</td>
                    <td>6 Months</td>
                </tr>

            </table>

        </td>

    </tr>

</table>

<br>

<center>

<a href="https://www.google.com" target="_blank">
    Visit Website
</a>

<br><br>

<form method="post">

    Enter Course Name:

    <input type="text" name="course">

    <input type="submit" value="Enroll">

</form>

</center>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3 align='center'>";

    echo "You enrolled in: " . $_POST["course"];

    echo "</h3>";
}

?>

</body>
</html>