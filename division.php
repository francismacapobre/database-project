<html>
<head><title> Satisfied Customers</title></head>

<body>


<?php
include "mpconnection.php";
$conn = OpenCon();

if (isset($_POST['division'])){

    $query = "SELECT customer2.name 
    From customer1 left join customer2 on customer1.cardnumber = customer2.cardnumber
    Where NOT EXISTS((select rating From review where rating > 1) 
                    except  
                    ( select rating from review where review.reviewerid = customer1.customerid))";


    $result = mysqli_query($conn,$query);


    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    echo '<table align = "left" cellspacing = "10" cellpadding = "8">
            <tr> 
            <td align = left> <b> Happy Customer </b> </td>
            <tr>';

            while($row = mysqli_fetch_array($result)){      
                echo '<tr><td align = "left">' . $row[0] . '</td><td align = "left">';
                echo '</tr>';
            }
        

            echo "</table>";




}


Closecon($conn)
?>

</body>


</html>