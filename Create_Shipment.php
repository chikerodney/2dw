<?php include('db_conn.php') ?>
<?php include('includes/header.php') ?>

  <?php  

$Surname = ($_POST["surname"]);
$OtherNames =($_POST['OtherNames']);
$PhoneNo = ($_POST['PhoneNo']);
$Address = ($_POST['Address']);
$RcvName = ($_POST['RcvName']);
$DlvAddress = ($_POST['DlvAddress']);
$RcvPhone = ($_POST['RcvPhone']);
$ItemDesc = ($_POST['ItemDesc']);
  
$sql = "INSERT INTO create_shipments (Surname, Other_Names, Snd_Phone_No, RcvName, Pick_Up_Address, Dlv_Address, Rcv_Phone_No, Item_Desc)
VALUES ('$Surname', '$OtherNames', '$PhoneNo', '$Address', '$RcvName', '$DlvAddress', '$RcvPhone', '$ItemDesc')";

if ($conn->query($sql) === TRUE) {

echo '<h2 class="w3-center w3-card-3 ">Shipment Created Successfully</h2>';

}

else {
  echo "Error: " .$sql . "<br>" . $conn->error;

}

$conn->close();

$to = "bykeigboke@yahoo.com";

$subject = "$Surname's Shipment Order";

$message = "Sender: $Surname $OtherNames";
$message = "Reciever: $RcvName $RcvPhone";

$headers = "MIME-Version: 1'0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $Surname";
$headers .= "X-priority: 1";
$headers .= "X-MSMail-Priority: High";

//send the mail
mail( $to, $subject, $message, $headers);


?> 
<div class=" w3-card-4 w3-margin w3-blue">
<h3 class="w3-center"> Shipment Details:</h3>

<ul class="w3-center w3-margin w3-large" >
<li>Sender: <?php echo "$Surname $OtherNames";?>-<?php echo "$PhoneNo"; ?>  </li>
<li>Reciever: <?php echo "$RcvName";?> -<?php echo "$RcvPhone";?>   </li>
<li>Pick-up Address: <?php echo "$Address";?> </li>
<li>Delivery Address: <?php echo "$DlvAddress";?> </li>
<li>Item Description: <?php echo "$ItemDesc";?></li>
</ul>
   

   <div class="w3-card-4 w3-margin w3-center w3-red">
   <h3>Our Agent will contact you within 20 mins.</h3>
   <h2>Thank's for Patronising Us</h2>
   </div>
   </div>

<?php include ('includes/footer.php') ?>