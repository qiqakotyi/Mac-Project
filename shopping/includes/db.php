<?php
	@mysql_connect('localhost', 'root', 'root') or die("Database is not available, please try again later");
	@mysql_select_db("shopping") or die("Database is not available, please try again later");
	session_start();
?>