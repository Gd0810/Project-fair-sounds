<?php
 include 'db.php';
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){

    // Fetch the latest booking data
    $query = "SELECT * FROM booking ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result === false) {
        die('Error: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        
        // Display the latest booking details
        // $cname = $row['customer_name']; // Assuming 'customer_name' is the field in your database
        // Display other booking details here

        // Store fetched data in session variables if needed
        $_SESSION['plan'] = $row['plan'];
        $_SESSION['mi1n'] = $row['mi1n'];
        $_SESSION['mi1q'] = $row['mi1q'];
        $_SESSION['customer_name'] = $row['customer_name'];

        // Add more session variables for other columns as needed
    }

    
//     $query = "SELECT username, email FROM signup   ";
// $result = mysqli_query($conn, $query);


$query = "SELECT username, email FROM signup WHERE id = ".$_SESSION['id'];
$result = mysqli_query($conn, $query);


if ($result === false) {
    die('Error: ' . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    
    $_SESSION['username']= $row['username'];
    $_SESSION['email']= $row['email'];

    // Set the session variables for username and email
    // $_SESSION['username'] = $username;
    // $_SESSION['email'] = $email;

    // Display the username and email
    // echo "Username: $username<br>";
    // echo "Email: $email<br>";
}



    // Free result set
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Booking Details</title>
 </head>
 <body>
     <h1>Booking Details</h1>

     <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>

         <h2>Name:<?php echo $_SESSION['customer_name']; ?></h2>
         <h2>user id:<?php echo $_SESSION['username']; ?> </h2>
         <h2>user id:<?php echo $_SESSION["email"]; ?> </h2>
    
         <h2>Plan: <?php echo $_SESSION['plan']; ?></h2>
         <p>Venai: <?php echo $_SESSION['mi1n']; ?>, Quantity: <?php echo $_SESSION['mi1q']; ?></p>
         <!-- Add more lines for other details -->

     <?php else: ?>
     <p>You must be logged in to view this page.</p>
     <?php endif; ?>

     <a href="logout.php">Logout</a>
 </body>
 </html>

 <?php
} else {
    // User is not logged in, redirect to the login page
    echo "<script>alert('You must be logged in to continue');</script>";
    echo "<script>window.location.replace('login.php');</script>";
    exit();
}
?>
