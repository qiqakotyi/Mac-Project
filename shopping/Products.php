<?php 
error_reporting(0);

 ?>
 <?php
require_once("includes/config.php");
require("includes/functions.php");
require("includes/db.php");

if ($_REQUEST['command'] == 'add' && $_REQUEST['productid'] > 0) {
    $pid = $_REQUEST['productid'];

    if(isset($SESSION['cart'][$pid]))
    {
        $_SESSIN['cart'][$pid]['qty']++;
         header("location:Shoppingcart.php");
    }
  else{
      addtocart($pid, 1);
    // echo "<script type='text/javascript'>alert('Item added successfully, Click view cart to continue!')</script>";
    header("location:Shoppingcart.php");
     exit();

  }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width-device-width initial-scale-1.0">
            <title>Young adults Clothing</title>
            <link href="styles/bootstrap.css" rel="stylesheet">
                <link href="styles/bootstrap-responsive.css" rel="stylesheet">


                    <script language="javascript">
                        function addtocart(prodid) {
                            document.form1.productid.value = prodid;
                            document.form1.command.value = 'add';
                            document.form1.submit();
                        }
                    </script>
                    </head>


                    <body>
                        <form name="form1">
                            <input type="hidden" name="productid" />
                            <input type="hidden" name="command" />
                        </form>
                        <div class="navbar navbar-fixed-top">
                            <div class="navbar-inner">
                                <div class="container">
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <span class="icon-th-list"></span>
                                    </a>
                                    <a href="#" class="brand">Young adults Clothing</a>
                                    <div class="nav-collapse collapse">
                                        <ul class="nav pull-right">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="Shoppingcart.php">View cart</a></li>   
                                            <li><a href="#">My Account</a></li> 
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>

                                </div>   
                            </div> 
                        </div>
                        <script src="jquery-1.9.0.min.js"></script>
                        <script src="js/bootstrap.js"></script>

                        <div class="hero-unit">
                            <h1>Adults Online Clothing Shop</h1>
                        </div>

                        <div align="center">
                          
                            <table border="0" cellpadding="2px" width="600px">
                                <?php
                              
                                $db = new database('localhost','root','root','shopping');

                                
                                $db->query("SELECT * from products");

                                if($db->numRows()==0)
									{
									echo "Records Not found";
									}

                                foreach ($db->rows() as $row) {
					
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo $row['picture'] ?>" /></td>
                                        <td>   	<b><?php echo $row['name'] ?></b><br />
                                            <?php echo $row['description'] ?><br />
                                            Price:<big style="color:green">
                                                R<?php echo $row['price'] ?></big><br /><br />
                                            
                                            <input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial']?>)" />
                                         <!-- <input type="button" value="View more"onclick="location.href='ProductsDescriptions.php'"/> -->   
                                        </td>

                                    </tr>

                                    <tr><td colspan="2"><hr size="1" /></td>
                                    

                                    <?php } ?>
                                    
                                    <tr>

                            </table>    

                                    <input type="button" value="Next Page">
                                      
                                       
                        </div>
                    </body>
                    </html>