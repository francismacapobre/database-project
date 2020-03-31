<html>
<head><title> New Profile...</title></head>

<body>
<form action = "Customeradded.php" method = "post">

<div style="text-align:center;">
<b> Please Enter The Following </b>

<p>Username:
<input type = "text" name = "username" size = 30  >
</p> 

<p>Card Number (Credit Card Only):
<input type = "text" name = "cardnum" size = 16 maxlength = 16 >
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


</form>
</div>

</body>

</html>