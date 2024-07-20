<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pcode = $_POST['password'];
$phcode = $_POST['phnumber'];

// it means i assaing the empty strings

$name = $email = $password = $phnumber = "";
$name_err = $email_err = $password_err = $phnumber_err = "";

// Validate name
if (empty(trim($_POST["name"]))) {
    $name_err = "Please enter a name.";
} elseif (!preg_match("/^[a-zA-Z]+$/", trim($_POST["name"]))) {        // preg_match default php function it's called pattern matching //    
    $name_err = "Username can only contain alphabetic characters.";
} else {
    $name = trim($_POST["name"]);
}


// Validate email
if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter an email.";
} elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {   // !filter_var default php function  used for filtering variables using a specified filter. //
    $email_err = "Please enter a valid email address.";
} else {
    $email = trim($_POST["email"]);
}

// Validate password
if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
} elseif (strlen(trim($_POST["password"])) < 6) {       //strlen is a PHP function used to get the length of a string.//
    $password_err = "Password must have at least 6 characters.";
} else {
    $password = trim($_POST["password"]);
}

// Validate phone number
if (empty(trim($_POST["phnumber"]))) {
    $phnumber_err = "Please enter a phone number.";
} elseif (!is_numeric(trim($_POST["phnumber"]))) {   //is_numeric is a PHP function used to determine if a variable is a numeric value.//
    $phnumber_err = "Phone number must be numeric.";
} else {
    $phnumber = trim($_POST["phnumber"]);
}

// Check if there are no validation errors before inserting into the database
if (empty($name_err) && empty($email_err) && empty($password_err) && empty($phnumber_err)) {
    $prj = "INSERT INTO signup VALUES ( ' ','" . $name . "','" . $email . "','" . $pcode . "'," . $phcode . ")";
    $conn->query($prj);
    $conn->close();

    // Redirect to login.php
    header("Location: login.php");
    exit(); // Ensure script execution stops here
} 
else {
    // Display validation errors as alert messages using JavaScript
    echo "<script>";
    echo "alert('Validation errors:\\n" . $name_err . "\\n" . $email_err . "\\n" . $password_err . "\\n" . $phnumber_err . "');";
    echo "</script>";
}

?>