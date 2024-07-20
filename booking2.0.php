<?php
include 'db.php';

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){

    $plan = $_POST['sclass'];

$venai = $_POST['venai'];
$venaiq = $_POST['vquantity'];

$nadas = $_POST['nadaswaram'];
$nadasq = $_POST['nquantity'];

$thavil = $_POST['thavil'];
$thavilq = $_POST['tquantity'];

$flute = $_POST['flute'];
$fluteq = $_POST['fquantity'];

$kombu = $_POST['kombu'];
$kombuq = $_POST['kquantity'];

$thapu = $_POST['thapu'];
$thapuq = $_POST['tpquantity'];

$pampai = $_POST['pampai'];
$pampaiq = $_POST['pquantity'];

$chanda = $_POST['chanda'];
$chandaq = $_POST['chquantity'];

$villu = $_POST['villu'];
$villuq = $_POST['vpquantity'];

$urumi = $_POST['urumi'];
$urumiq = $_POST['uquantity'];

$violin = $_POST['violin'];
$violinq = $_POST['viquantity'];

$tabla = $_POST['tabla'];
$tablaq = $_POST['tblquantity'];

$harmon = $_POST['monium'];
$harmonq = $_POST['hquantity'];

$mridan = $_POST['dangam'];
$mridanq = $_POST['mriquantity'];

$devaram = $_POST['singers'];
$devaramq = $_POST['dsquantity'];

$drum = $_POST['drum'];
$drumq = $_POST['drmquantity'];

$piano = $_POST['piano'];
$pianoq = $_POST['pnoquantity'];

$guitar = $_POST['guitar'];
$guitarq = $_POST['gtrquantity'];

$trump = $_POST['trumpt'];
$trumpq = $_POST['trmquantity'];

$saxo = $_POST['sax'];
$saxoq = $_POST['saxquantity'];

$clarin = $_POST['clarinet'];
$clarinq = $_POST['clrquantity'];

$french = $_POST['horn'];
$frenchq = $_POST['fhquantity'];

$multip = $_POST['multi'];
$multipq = $_POST['mpquantity'];

$dj = $_POST['dj'];
$djq = $_POST['djquantity'];

$startp = $_POST['start_bundle'];

$midp = $_POST['mid_bundle'];

$starp = $_POST['star_bundle'];

$otherp = $_POST['other_bundle'];

$totalrs = $_POST['total'];

$cname = $_POST['cname'];

$cph = $_POST['phnumber'];

$from = $_POST['fromd'];

$until = $_POST['untild'];

$location = $_POST['addr'];

$ccomment = $_POST['comment'];



$sql = "INSERT INTO booking (id, date_added, plan, mi1n, mi1q, mi2n, mi2q, mi3n, mi3q, mi4n, mi4q, mi5n, mi5q, mi6n, mi6q, mi7n, mi7q, mi8n, mi8q, mi9n, mi9q, mi10n, mi10q,
 mi11n, mi11q, mi12n, mi12q, mi13n, mi13q, mi14n, mi14q, mi15n, mi15q, mi16n, mi16q, mi17n, mi17q, mi18n, mi18q, mi19n, mi19q, mi20n,
  mi20q, mi21n, mi21q, mi22n, mi22q, mi23n, mi23q, mi24n, mi24q, mp1, mp2, mp3, mp4, total, customer_name, customer_phone, from_date, until_date, address, comment)

 VALUES (NULL, CURDATE(), '$plan', '$venai', '$venaiq', '$nadas', '$nadasq', '$thavil', '$thavilq', '$flute', '$fluteq',  '$kombu', '$kombuq', '$thapu', '$thapuq', '$pampai',
  '$pampaiq', '$chanda', '$chandaq', '$villu', '$villuq', '$urumi', '$urumiq', '$violin', '$violinq', '$tabla', '$tablaq', '$harmon', '$harmonq', '$mridan', '$mridanq', '$devaram',
   '$devaramq', '$drum', '$drumq', '$piano', '$pianoq', '$guitar', '$guitarq', '$trump', '$trumpq', '$saxo', '$saxoq', '$clarin', '$clarinq', '$french', '$frenchq', '$multip',
    '$multipq', '$dj', '$djq', '$startp', '$midp', '$starp', '$otherp', '$totalrs', '$cname', '$cph', '$from', '$until', '$location', '$ccomment')";

if ($conn->query($sql) === TRUE) {
    header("location:end.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

} else {
    // User is not logged in, redirect to the login page
    echo "<script>alert('You must be logged in to continue');</script>";
    echo "<script>window.location.replace('login.php');</script>";
    exit();
}



?>
