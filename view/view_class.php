<?php
class ViewClass{
	public $arr = array();
	
	function show()
	{
		extract($this->arr);
		include_once "view/".$_GET["control"]."View.html";
	}
	function assign($name , $value){
		$this->arr[$name] = $value;
	}
	public function __destruct(){
	
		$this ->show();
	}
	}
?>