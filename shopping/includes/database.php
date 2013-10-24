<?php


	class database{

				protected $link,$results,$numRows;

				public function __construct($server,$username,$password,$db)
				{
					
					$this->link = mysql_connect($server,$username,$password);
					mysql_select_db($db,$this->link);

				
				}
				public function disconnect()
				{

					mysql_close();
				}
				public function query($sql)
				{
					$this->results = mysql_query($sql,$this->link) ;
					$this->numRows = mysql_num_rows($this->results);
				}
				// public function insertQuery($table,$data)
				// {
				// 	$fields = array_keys($data);
				// 	$values = array_map("mysql_real_escape_string",array_values($data));
				// 	@mysql_query("INSERT  INTO  `".$table."` (`" .implode("`,`",$fields)."`) VALUES('".implode("','",$values)."'); ") or die("Cannot execute mysql query.");


				// } 
				public function numRows()
				{
					return $this->numRows;
				}
				public function rows()
				{
					$rows =array();
					
					for($x=0;$x < $this->numRows();$x++){

						$rows[] = mysql_fetch_assoc($this->results);
					}	
					return $rows;
				}


 }

 





}

 
?>