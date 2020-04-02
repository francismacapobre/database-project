<html>
<body>
<h1> Cheapest service</h1>
<form action="agg.php" method="post">
    <input type="submit" class="button" name="WORST" value="WORST" />
</form>


<?php
function get_table($conn, $sql) {
    $result = mysqli_query($conn,$sql) or die(mySqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"2\"cellpadding=\"0\"><tr align=\"center\" bgcolor=\"#CCCCCC\">";
        $i = 0;
        while ($i < mysqli_num_fields($result)) {
            $field = mysqli_fetch_field_direct($result, $i);
            $fieldName=$field->name;
            echo "<td><strong>$fieldName</strong></td>";
            $i = $i + 1;
        }
    echo "</tr>";

    $bolWhite = true;
    while ($row = mysqli_fetch_assoc($result)) {
        echo $bolWhite ? "<tr bgcolor=\"#CCCCCC\">" : "<tr bgcolor=\"#FFF\">";
        $bolWhite=!$bolWhite; 
        foreach($row as $data) {
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }
    echo"</table>";

    }
}



    include 'mpconnection.php';
    $conn = OpenCon();
    $sql = "SELECT ServiceType, min(Price) as soCheap from ProvidedService2";
    
    if (isset($_POST['WORST'])){
        get_table($conn, $sql);
    }

?>


</body>



</html>