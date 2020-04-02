<html>
<head> <title>Verifying...</title></head>

<body>

<?php

include 'mpconnection.php';
$conn = OpenCon();


if (isset($_POST['adminsignin'])){

    echo '<p><form action = "project.php" method = "post">
    Check for all the types of provided services :  <input  type = "submit" name = "project" value = "Here">
    </form></p>';

    echo '<p><form action = "agg.php" method = "post">
    Find the worst service provider :  <input  type = "submit" name = "agg" value = "Here">
    </form></p>';


    echo '<p><form action = "groupby.php" method = "post">
    Services in completion :  <input  type = "submit" name = "groupby" value = "Here">
    </form></p>';


    echo '<p><form action = "division.php" method = "post">
    List of satisfied Customers:  <input  type = "submit" name = "division" value = "Here">
    </form></p>';

    echo '<p><form action = "join-query.php" method="post">
    List of names of service providers who did not comeplete requests:<input type="submit" name ="join-query" value =
    "Here"></form></p>';

}

Closecon($conn);

?>

</body>

</html>