<html>
<head><title> Service being completed</title></head>

<body>


<?php
include "mpconnection.php";
$conn = OpenCon();

if (isset($_POST['groupby'])){

    $query = "SELECT manages.currentstatus, completesservicerequest.duedate, transactiondetail.servicetype
    From Manages inner join transactiondetail
    on manages.servicerequestid = transactiondetail.providerid
    inner join completesservicerequest 
    on transactiondetail.providerid = completesservicerequest.servicerequestid
    Group by manages.currentstatus";

    $result = mysqli_query($conn,$query);


    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    echo '<table align = "left" cellspacing = "10" cellpadding = "8">
            <tr> 
            <td align = left> <b> Status </b> </td>
            <td align = left> <b> Due Date </b> </td>
            <td align = left> <b> Service Type </b> </td>
            <tr>';

            while($row = mysqli_fetch_array($result)){      
                echo '<tr><td align = "left">' . $row[0] . '</td><td align = "left">'
                    . $row[1] . '</td><td align = "left">'. $row[2] . '</td><td align = "left">';
                echo '</tr>';
            }
        

            echo "</table>";


    
}


Closecon($conn)
?>


</body>


</html>