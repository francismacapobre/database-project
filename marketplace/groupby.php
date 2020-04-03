<html>
<head><title> Service being completed</title><style>
        body {
        background-color: linen;
        }

        h1 {
        color: maroon;
        }

        button {
            margin-left: 20px;
        }
    </style></head>

<div style="text-align:center; padding-top:30px">
<h1>Average Rating For Each Review </h1>
<body>


<?php
include "mpconnection.php";
$conn = OpenCon();

if (isset($_POST['groupby'])){

    $query = "SELECT serviceprovider.name, avg(rating)
    From review inner join serviceprovider
    on review.revieweeid = serviceprovider.serviceproviderid
    Group by review.revieweeid";


    $result = mysqli_query($conn,$query);


    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    echo '<table align = "center" cellspacing = "10" cellpadding = "8">
            <tr> 
            <td align = left> <b> Service Provider Name </b> </td>
            <td align = left> <b> Average Rating </b> </td>
            <tr>';

            while($row = mysqli_fetch_array($result)){      
                echo '<tr><td align = "left">' . $row[0] . '</td><td align = "left">'
                    . $row[1] . '</td><td align = "left">';
                echo '</tr>';
            }
        

            echo "</table>";


    
}


Closecon($conn)
?>


</body>
</div>


</html>