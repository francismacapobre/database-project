<?php
include 'mpconnection.php';
$conn = OpenCon();
echo "Connected Successfully to Market Place";

$query = "SELECT username FROM Customer1";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        echo $row["username"] . "<br>";
    }

} else {

    echo "0 results";
 }   

Closecon($conn);

?>