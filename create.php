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
        
        // Store fetched data in session variables if needed
        $_SESSION['plan'] = $row['plan'];
        $_SESSION['mi1n'] = $row['mi1n'];
        $_SESSION['mi1q'] = $row['mi1q'];
        $_SESSION['mi2n'] = $row['mi2n'];
        $_SESSION['mi2q'] = $row['mi2q'];
        $_SESSION['mi3n'] = $row['mi3n'];
        $_SESSION['mi3q'] = $row['mi3q'];
        $_SESSION['mi4n'] = $row['mi4n'];
        $_SESSION['mi4q'] = $row['mi4q'];
        $_SESSION['mi5n'] = $row['mi5n'];
        $_SESSION['mi5q'] = $row['mi5q'];
        $_SESSION['mi6n'] = $row['mi6n'];
        $_SESSION['mi6q'] = $row['mi6q'];
        $_SESSION['mi7n'] = $row['mi7n'];
        $_SESSION['mi7q'] = $row['mi7q'];
        $_SESSION['mi8n'] = $row['mi8n'];
        $_SESSION['mi8q'] = $row['mi8q'];
        $_SESSION['mi9n'] = $row['mi9n'];
        $_SESSION['mi9q'] = $row['mi9q'];
        $_SESSION['mi10n'] = $row['mi10n'];
        $_SESSION['mi10q'] = $row['mi10q'];
        $_SESSION['mi11n'] = $row['mi11n'];
        $_SESSION['mi11q'] = $row['mi11q'];
        $_SESSION['mi12n'] = $row['mi12n'];
        $_SESSION['mi12q'] = $row['mi12q'];
        $_SESSION['mi13n'] = $row['mi13n'];
        $_SESSION['mi13q'] = $row['mi13q'];
        $_SESSION['mi14n'] = $row['mi14n'];
        $_SESSION['mi14q'] = $row['mi14q'];
        $_SESSION['mi15n'] = $row['mi15n'];
        $_SESSION['mi15q'] = $row['mi15q'];
        $_SESSION['mi16n'] = $row['mi16n'];
        $_SESSION['mi16q'] = $row['mi16q'];
        $_SESSION['mi17n'] = $row['mi17n'];
        $_SESSION['mi17q'] = $row['mi17q'];
        $_SESSION['mi18n'] = $row['mi18n'];
        $_SESSION['mi18q'] = $row['mi18q'];
        $_SESSION['mi19n'] = $row['mi19n'];
        $_SESSION['mi19q'] = $row['mi19q'];
        $_SESSION['mi20n'] = $row['mi20n'];
        $_SESSION['mi20q'] = $row['mi20q'];
        $_SESSION['mi21n'] = $row['mi21n'];
        $_SESSION['mi21q'] = $row['mi21q'];
        $_SESSION['mi22n'] = $row['mi22n'];
        $_SESSION['mi22q'] = $row['mi22q'];
        $_SESSION['mi23n'] = $row['mi23n'];
        $_SESSION['mi23q'] = $row['mi23q'];
        $_SESSION['mi24n'] = $row['mi24n'];
        $_SESSION['mi24q'] = $row['mi24q'];
        $_SESSION['mp1'] = $row['mp1'];
        $_SESSION['mp2'] = $row['mp2'];
        $_SESSION['mp3'] = $row['mp3'];
        $_SESSION['mp4'] = $row['mp4'];
        $_SESSION['total'] = $row['total'];

        $_SESSION['customer_name'] = $row['customer_name'];

        $_SESSION['customer_phone'] = $row['customer_phone'];

        // Add more session variables for other columns as needed
    }

    // Fetch user details
    $query = "SELECT username, email FROM signup WHERE id = ".$_SESSION['id'];
    $result = mysqli_query($conn, $query);

    if ($result === false) {
        die('Error: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
    }

    // Free result set
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

    // Generate PDF
    require('./fpdf186/fpdf.php');

    $pdf = new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);

    $pdf->SetFont('Arial', 'B', 25); // Set font to bold Arial, size 16
$pdf->Cell(71, 10, '', 0, 0);
$pdf->Cell(59, 10, 'Fair sounds', 0, 0); // Display the heading
$pdf->Cell(59, 10, '', 0, 1); // Move to the next line
$pdf->SetFont('Arial', '', 12); // Reset font to normal Arial, size 12



$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 20, 'Customer Details', 0, 1, 'C');

// Data rows
$pdf->SetFont('Arial', 'B', 12);
$data = array(
    array('User name', $_SESSION['username']),
    array('Gmail', $_SESSION['email']),
    array('Order name', $_SESSION['customer_name']),
    array('Phone No', $_SESSION['customer_phone']),
);
// The foreach loop allows you to easily iterate over these rows and output them in the desired format in the PDF file.
foreach ($data as $row) {
    $pdf->Cell(95, 10, $row[0], 1, 0, 'C');  
    $pdf->Cell(95, 10, $row[1], 1, 1, 'C');
}
$pdf->Cell(0, 20, 'package class Details', 0, 1, 'C');

// Data rows
$pdf->SetFont('Arial', 'B', 12);
$data = array(
    array('class', $_SESSION['plan'])
   
);

foreach ($data as $row) {
    $pdf->Cell(95, 10, $row[0], 1, 0, 'C');
    $pdf->Cell(95, 10, $row[1], 1, 1, 'C');
}

$pdf->Cell(0, 20, 'Invoice Booking Details', 0, 1, 'C');


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(95, 10, 'Instruments', 1, 0, 'C');
$pdf->Cell(95, 10, 'Quantity', 1, 1, 'C');

// Generate 24 table rows
$pdf->SetFont('Arial', 'B', 12);
for ($i = 1; $i <= 24; $i++) {
    $instrument = $_SESSION['mi' . $i . 'n'];
    $quendety = $_SESSION['mi' . $i . 'q'];
    $pdf->Cell(95, 10, $instrument, 1, 0, 'C');
    $pdf->Cell(95, 10, $quendety, 1, 1, 'C');
}

$pdf->Cell(0, 20, 'Package Details', 0, 1, 'C');

// Data rows
$pdf->SetFont('Arial', 'B', 12);
$data = array(
    array('Startup_package', $_SESSION['mp1']),
    array('Mid rang_package', $_SESSION['mp2']),
    array('Star rating _package', $_SESSION['mp3']),
    array('Other_package', $_SESSION['mp4']),
);

foreach ($data as $row) {
    $pdf->Cell(95, 10, $row[0], 1, 0, 'C');
    $pdf->Cell(95, 10, $row[1], 1, 1, 'C');
}

$pdf->Cell(0, 20, 'Amount Details', 0, 1, 'C');

// Data rows
$pdf->SetFont('Arial', 'B', 12);
$data = array(
    array('Total Amount', 'Rs.' . $_SESSION['total'])
   
);

foreach ($data as $row) {
    $pdf->Cell(95, 10, $row[0], 1, 0, 'C');
    $pdf->Cell(95, 10, $row[1], 1, 1, 'C');
}

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 15, 'NOTE:Prices vary depending on distance and working hours', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 35, 'Thank You For Using Fair Sounds', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'Enjay Our Marvelous Music Arrangements', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'Phone No:7530031442', 0, 1, 'C');


$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'Gmail:zeefer2000@gmail.com', 0, 1, 'C');




$pdf->Output();


    $pdf->Output();
}
else {
    echo "User not logged in.";
}
?>
