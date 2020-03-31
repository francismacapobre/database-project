<html>
<head><title> Add Customer </title><head>
<body>

<?php

include 'mpconnection.php';


if (isset($_POST['csubmit'])){
    $data_missing = array();
    $conn = Opencon();
   
    if(empty($_POST['username'])){

        $data_missing[] = 'username';
    } else {
        $username = $_POST["username"];
    }

    if(empty($_POST['cardnum'])){

        $data_missing[] = 'cardnum';
    } else {
        $cardnum = $_POST["cardnum"];
    }


    if (empty($data_missing)){
        
        $query = "INSERT INTO Customer1(username,cardNumber) VALUE(?,?)";
        $stmt = mysqli_prepare($conn,$query);

        mysqli_stmt_bind_param($stmt, "si",$username,$cardnum);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if ($affected_rows == 1){
            echo 'Welcome!' ;

            mysqli_stmt_close($stmt);

            CloseCon($conn);

        } else {
            echo "Error Occurred in Customer 1";
            echo mysqli_error($conn);

            mysqli_stmt_close($stmt);

            CloseCon($conn);
        }

    } else {

       echo "Please Enter All The Fields!";
    }
    

}



if (isset($_POST['csubmit'])){
    $data_missing = array();
    $conn = Opencon();
  
    if(empty($_POST['cardnum'])){

        $data_missing[] = 'cardnum';
    } else {
        $cardnum = $_POST["cardnum"];
    }


    if(empty($_POST['caddress'])){

        $data_missing[] = 'caddress';
    } else {
        $caddress = $_POST["caddress"];
    }
    

    if(empty($_POST['cname'])){

        $data_missing[] = 'cname';
    } else {
        $cname = $_POST["cname"];
    }

    if (empty($data_missing)){
        $query2 = "INSERT INTO Customer2(cardNumber,billingAddress,name) VALUE(?,?,?)";
        $stmt2 = mysqli_prepare($conn,$query2);

        mysqli_stmt_bind_param($stmt2, "iss",$cardnum,$caddress,$cname);

        mysqli_stmt_execute($stmt2);

        $affected_rows2 = mysqli_stmt_affected_rows($stmt2);

        if ($affected_rows2 == 1){
            echo $cname;

            mysqli_stmt_close($stmt2);

            CloseCon($conn);
            
        } else {
            echo "Error Occurred in Customer 2";
            echo mysqli_error($conn);

            mysqli_stmt_close($stmt2);

            CloseCon($conn);
        }
    } else {

        echo "Please Enter All The Fields!";
     }
     
    

}

?>



<!-- <form action = "Customeradded.php" method = "post">

<div style="text-align:center;">
<b> Please Enter The Following </b>

<p>Username:
<input type = "text" name = "username" size = 30  >
</p> 

<p>Card Number (Credit Card Only):
<input type = "text" name = "cardnum" size = 30 maxlength = 16 >
</p> 

<p>Billing Address (Apt - House#, Street):
<input type = "text" name = "caddress" size = 30  >
</p> 

<p>Name (First and Last):
<input type = "text" name = "cname" size = 30 >
</p> 

<p>
<input type = "submit" name = "csubmit" value = "Enter">
</p> 

</div>
</form> -->


</body>
</html>