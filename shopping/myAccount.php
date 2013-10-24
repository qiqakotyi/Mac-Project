<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
</head>

<body>
		<h2 font-size="20"> Purchase History</h2>

		<?php>
			require('config..php');
			require('login.php');

			$db = new database('localhost','root','','shopping');

			$db->query("SELECT * from purchase_history");

			if(isset($POST['username'])){


                 if($db->numRows()==0)
					{									
					  echo "Records Not found";
					}

                      foreach ($db->rows() as $row) {
					



			}



		?>
</body>
</html>>

<html>
    
    
 

   
</html>