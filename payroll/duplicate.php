
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Home</title>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex; /* Display the list items in a row */
        }

        li {
            margin: 15px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            padding: 30px 50px; /* Increased padding for larger buttons */
            border: 2px solid #3498db;
            border-radius: 6px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>

    <h1>Payroll Home</h1>

    <ul>
        <li><a href="employeeLogin.php">Employee Login</a></li>
        <li id="si"><a href="adminLogin1.php">Admin Login</a></li>
    </ul>

</body>
</html>
