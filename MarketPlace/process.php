<html>
<head><title> Welcome To The Service Market Place </title><head>

<body>



<?php
session_start();

include 'mpconnection.php';
$conn = OpenCon();


if (isset($_POST['login'])){


        $user = trim($_POST["login"]);
        
        $_SESSION['user'] = $_POST["login"];
    
        $query = mysqli_query($conn, "SELECT distinct customer1.* FROM Customer1 WHERE username = '$user' ") or die(mysqli_error($conn));
       
        if(mysqli_num_rows($query) > 0){
            
            $result = mysqli_query($conn, "SELECT transactiondetail.servicetype, transactiondetail.daterequested from customer1 left join customer2 on customer1.cardnumber = customer2.cardnumber
            left join transactiondetail on customer1.customerid = transactiondetail.customerid where customer1.username = '$user' ");

            echo '<table align = "left" cellspacing = "10" cellpadding = "8">
            <tr> 
            <td align = left> <b> Service </b> </td>
            <td align = left> <b> Date Requested </b> </td>
            <tr>';

            while($row = mysqli_fetch_array($result)){
                echo '<tr><td align = "left">' . $row["servicetype"]
               . '</td><td align = "left">' . $row["daterequested"] . '</td><td align = "left">';

               echo '</tr>';
            }

            echo "</table>";

            echo '<form action = "updateprofile.php" method = "post">
            <input type = "submit" name = "updateprofile" value = "View/Update Profile"  >
            </form>';
            
        } else {
            echo "Invalid Username, please try again or create a new account";
           
        }
    
    

}

Closecon($conn);

?>

</body>

</html>