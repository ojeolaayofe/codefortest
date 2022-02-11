<?php
$firstname = $_POST['firstname'];
$lastName = $_POST['lastname'];
$address = $_POST['address'];
$refferal = $_POST['refferal'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$lice = $_POST['lice'];
$date = $_POST['date'];
$ninnumber = $_POST['ninnumber'];
$lasdri = $_POST['lasdri'];
$bname = $_POST['bname'];
$accnumber = $_POST['accnumber'];
$accname = $_POST['accname'];


//Database Connection
$conn =new mysqli('localhost', 'root','', 'drive');

if($conn->connect_error)
{
  die('Connection Failed : '.$conn->connect_error);

} else{
	$stmt= $conn->prepare("insert into registration
    (firstname, lastname, address, refferal, phone, email, lice, date, ninnumber, lasdri, bname, accnumber, accname)values(?,?,?,?,?,?,?,?,?,?,?,?,?)"); 

	$stmt->bind_param
    ("ssssssssssssi", $firstname, $lastname, $refferal, $phone, $email, $lice, $date, $ninnumber, $lasdri, $bname, $accnumber, $accname );

$stmt->execute();

echo "You have Successfully Completed Your Registration! Kindly Show Up for Car Inspection"; 



$stmt->close();
$conn->close();

}

?>
