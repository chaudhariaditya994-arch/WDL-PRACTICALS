<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Menu</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightyellow;
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 60%;
        }

        td, th {
            padding: 10px;
        }

        th {
            background-color: orange;
        }

    </style>

</head>

<body>

<h2>Restaurant Menu</h2>

<table border="1">

    <tr>
        <th>Food Item</th>
        <th>Image</th>
        <th>Price</th>
    </tr>

    <tr>
        <td>Pizza</td>

        <td>
            <img src="pizza.jpg"
                 width="120" height="100">
        </td>

        <td>Rs. 250</td>
    </tr>

    <tr>
        <td>Burger</td>

        <td>
            <img src="burger.jpg"
                 width="120" height="100">
        </td>

        <td>Rs. 150</td>
    </tr>

</table>

<br>

<a href="https://www.zomato.com" target="_blank">
    Order Online
</a>

<br><br>

<h3>Menu Items Using PHP Array</h3>

<?php

$menu = array("Pizza", "Burger", "Pasta", "Sandwich");

foreach($menu as $item) {

    echo $item . "<br>";
}

?>

</body>
</html>