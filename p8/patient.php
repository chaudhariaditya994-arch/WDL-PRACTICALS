<!-- appointment.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Patient Appointment Form</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .container {
            width: 350px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
        }
    </style>

    <script>
        function validateForm() {
            let name = document.forms["appForm"]["name"].value;
            let age = document.forms["appForm"]["age"].value;

            if (name == "" || age == "") {
                alert("All fields are required!");
                return false;
            }

            if (age <= 0) {
                alert("Enter valid age");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Patient Appointment Form</h2>

    <form name="appForm" method="post" onsubmit="return validateForm()">
        <input type="text" name="name" placeholder="Patient Name">
        <input type="number" name="age" placeholder="Age">
        <input type="date" name="date">
        <textarea name="problem" placeholder="Health Problem"></textarea>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Appointment Details</h3>";
        echo "Name: " . $_POST['name'] . "<br>";
        echo "Age: " . $_POST['age'] . "<br>";
        echo "Date: " . $_POST['date'] . "<br>";
        echo "Problem: " . $_POST['problem'];
    }
    ?>
</div>

</body>
</html>
