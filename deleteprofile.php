<html>
<head><title>Delete?...</title></head>
<body>

<?php

if (isset($_POST["deleteprofile"])){
    
    echo '<form action = "confirm.php" method = post>';
    echo 'Are you sure you want to permanently delete your profile? <input type = submit name = confirm value = Yes>
    <input type = submit name = deny value = No></form>';
}


?>



</body>
</html>