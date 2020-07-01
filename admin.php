<?php  include('db_conn.php') ?>
<?php
$sql = "SELECT ID,Surname, Other_Names, Snd_Phone_No, RcvName, Pick_Up_Address, Dlv_Address, Rcv_Phone_No, Item_Desc FROM create_shipments";
$result = $conn->query($sql);

if ($result && $result->num_rows) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
    echo "ID: " . $row["ID"]. " - Name: " . $row["Surname"],$row["Other_Names"]. "-Sender's No: " .$row["Snd_Phone_No"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>