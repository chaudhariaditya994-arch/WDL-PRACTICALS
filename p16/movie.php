<!DOCTYPE html>
<html>
<head>
    <title>Movie Booking Page</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightblue;
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        td, th {
            padding: 10px;
        }

        form {
            background: white;
            width: 300px;
            margin: auto;
            padding: 20px;
        }

    </style>

    <script>

        function confirmBooking() {

            alert("Movie Ticket Booked Successfully!");

            return true;
        }

    </script>

</head>

<body>

<h2>Movie Booking Webpage</h2>

<!-- Main Table -->

<table border="1">

    <tr>
        <th>Movie</th>
        <th>Show Details</th>
    </tr>

    <tr>

        <td>Avengers</td>

        <td>

            <!-- Nested Table -->

            <table border="1">

                <tr>
                    <th>Time</th>
                    <th>Screen</th>
                </tr>

                <tr>
                    <td>10:00 AM</td>
                    <td>Screen 1</td>
                </tr>

                <tr>
                    <td>2:00 PM</td>
                    <td>Screen 2</td>
                </tr>

            </table>

        </td>

    </tr>

</table>

<br><br>

<form method="post"
      onsubmit="return confirmBooking()">

    Customer Name:
    <input type="text" name="name">

    <br><br>

    Movie Name:
    <input type="text" name="movie">

    <br><br>

    Number of Tickets:
    <input type="number" name="tickets">

    <br><br>

    <input type="submit" value="Book Ticket">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3>Booking Details</h3>";

    echo "Customer Name: " .
         $_POST["name"] . "<br>";

    echo "Movie Name: " .
         $_POST["movie"] . "<br>";

    echo "Tickets: " .
         $_POST["tickets"] . "<br>";
}

?>

</body>
</html>