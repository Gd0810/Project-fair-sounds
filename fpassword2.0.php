<?php
$password = ""; // Initialize password variable

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];

    // Connect to the database
    $server = "127.0.0.1";
    $password = "";
    $user = "root";
    $database = "project";

    $conn = new mysqli($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if username and email exist
    $query = "SELECT * FROM signup WHERE username='$username' AND email='$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Get the password from the database
        $row = $result->fetch_assoc();
        $password = $row['password'];
    } else {
        echo "Username or email not found.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .password-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            backdrop-filter: blur(10px); 
            background-color: rgba(255, 255, 255, 0.2); 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
            margin-bottom: 20px; /* Add margin to create space between the containers */
        }

        .password-container p {
            font-weight: bolder;
            font-size: 20px;
            color: blueviolet;
        }

        .button-container {
            text-align: center;
        }

        .button-container a {
            text-decoration: none;
            color: #333;
            background-color: #f9f9f9;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #ddd;
        }

        .button-container img {
            max-width: 30px;
            max-height: 30px;
            vertical-align: middle;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="password-container">
            <h1>Your Password</h1>
            <p><?php echo $password; ?></p>
        </div>
        <div class="button-container">
            <a href="login.php">
               <b> Back to login</b>
                <img src="https://i.imgur.com/9cYPOzS.gif">
            </a>
        </div>
    </div>
</body>
</html>
