<?php
class PageModel{
	private $conn;
	function __construct(){
		$this->conn = new mysqli("localhost" , "root" , "" , "mydb");
	}
	function getTitles(){
	$result = $this->conn->query("select * from news");
	$i=0;
	while($row[$i] = $result->fetch_array(MYSQLI_ASSOC)){
	$i++;
	}
	return $row;
}
}
?>