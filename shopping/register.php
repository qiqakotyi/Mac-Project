
<?php
    error_reporting(0);

 session_start();session_destroy();
 session_start();
if($_GET["regname"] && $_GET["regemail"] && $_GET["regpass1"] && $_GET["regpass2"] )
{
	if($_GET["regpass1"]==$_GET["regpass2"])
	{
	$servername="localhost";
    $username="root";
    $password = "";
    $conn=  mysql_connect($servername,$username,$password)or die(mysql_error());
    mysql_select_db("shopping",$conn);
    $sql="insert into login (username,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    print "<h1>you have registered sucessfully</h1>";
   
    print "<a href='index.php'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
else print"invaild input data";

?>