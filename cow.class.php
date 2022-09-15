<?php
require_once("./animal.class.php");
class cow extends animal
{
	public $type = "cow";
	public $typeprod = "milk";
	public function GetProd()
	{
	return rand(8,12);
	}

	function __construct($id=0,$maxlife=365)
	{
		parent::__construct($id,$maxlife);
		
	}
	
}
?>
