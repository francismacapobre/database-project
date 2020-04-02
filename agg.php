<html>
<head><title> Worst Service Provider</title></head>

<body>


<?php
include "mpconnection.php";
$conn = OpenCon();

if (isset($_POST['agg'])){

    $query = "SELECT averagerating.name, min(averagerating.value) from averagerating";
        

    $result = mysqli_query($conn,$query);


    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    echo '<table align = "left" cellspacing = "10" cellpadding = "8">
            <tr> 
            <td align = left> <b> Service Provider Name </b> </td>
            <td align = left> <b> Rating </b> </td>
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



</html>