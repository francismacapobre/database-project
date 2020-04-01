<html>
<head><title>Deleting...</title></head>
<body>

<?php
session_start();

include "mpconnection.php";
$conn = OpenCon();


if (isset($_POST["confirm"])){
    $user = $_SESSION['user'];

    $query = "DELETE customer1,customer2 
    FROM customer1 inner join customer2 on customer1.cardnumber = customer2.cardnumber
    WHERE customer1.username = '$user'";

    if (mysqli_query($conn, $query)) {
        echo "<p>Profile Removed successfully<.p>";
        echo "<p>Redirecting to login page...</p>";
        header('refresh:3; url = http://localhost/select.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}

if (isset($_POST["deny"])){
    echo "<p>Will not delete profile</p>";
    echo "<p>Redirecting to login page...</p>";
    header('refresh:3; url = http://localhost/select.php');
}

Closecon($conn);

?>



</body>
</html>