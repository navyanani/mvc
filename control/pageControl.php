<?php
	class pageControl extends ViewClass{
		function home(){
			include_once "model/pageModel.php";
			$obj = new pageModel();
			$this->assign("news" , $obj->getTitles());
	}
}
?>