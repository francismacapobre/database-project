<html>
<head><title>Updating...</title></head>
<body>

<?php


if (isset($_POST["changeaddress"])){
    
    echo '<form action = "updatetonew.php" method = post>';
    echo 'Enter new address: <input name = newad type = text> <input type = submit name = updatead value = Update></form>';
}

?>



</body>
</html>