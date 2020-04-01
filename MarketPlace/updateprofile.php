<html>
<head><title> Update </title></head>

<body>

<?php
session_start();

include "mpconnection.php";
$conn = OpenCon();


if (isset($_POST["updateprofile"])){

    $user = $_SESSION['user'];

$query = mysqli_query($conn, "SELECT customer1.username, customer1.cardNumber, customer2.billingaddress, customer2.name from customer1 left join customer2 
on customer1.cardnumber = customer2.cardnumber where customer1.username = '$user' ");


echo '<table align = "left" cellspacing = "10" cellpadding = "8">
<tr> 
<td align = left> <b> Username </b> </td>
<td align = left> <b> Name </b> </td>
<td align = left> <b> Billing Address </b> </td>
<td align = left> <b> Card Number </b> </td>
<tr>';

$row = mysqli_fetch_row($query);

echo '<tr><td align = "left">' . $row[0]
. '</td><td align = "left">' . $row[3] . '</td><td align = "left">' .
$row[2] . '</td><td align = "left">' . $row[1] . '</td><td align = "left">';


echo '<tr> <form action = "updateuser.php" method = post>';
echo '<td align = "left"></td>';
echo '<td align = "left"></td>';
echo '<td align = "left"><input type = submit name = changeaddress value = Change Address> </td>' ;
echo '</tr>';
echo "</table>";


}




Closecon($conn);

?>

</body>

</html>