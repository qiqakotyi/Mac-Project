<?php 
error_reporting(0);
 ?>

<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];
		$postal_code = $REQUEST['postal_code'];

		$result=mysql_query("insert into customers values('','$name','$email','$address','$phone')");
		$customerid=mysql_insert_id();
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$customerid')");
		$orderid=mysql_insert_id();
		$result=mysql_query("insert into delivery values('','$address','$postal_code','$phone','$email','$customerid')");
		$delivery_id=mysql_insert_id();
		
		$max=count($_SESSION['cart']);

		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysql_query("insert into order_detail values ($orderid,$pid,$q,$price)");
		}
		echo("Thank You! your order has been placed!\n");
		echo "Your reference number is :\n";
		echo random_id(5);

		unset($_SESSION['cart']);
		exit();

	}
	
	
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Info</title>
<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
</head>


<body>
<form align="center" name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1>

        <input type="button" value="Home" onclick="window.location='index.php'" />
        
        <table border="0" cellpadding="2px">
        	<tr><td>Order Total:</td><td><?php echo get_order_total()?></td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
            <tr><td>Phone:</td><td><input type="text" name="phone" /></td></tr>
            <tr><td>Address:</td><td><input type="text" name="address" /></td></tr>
            <tr><td>Postal code:</td><td><input type="text" name="postal" size=5/></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /><input type="reset" value="Clear" /></td></tr>
        </table>
	</div>
</form>
</body>
</html>
