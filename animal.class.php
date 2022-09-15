<?php
class animal 
{
	public $id;
	private $cur_day = 0;
	private $maxlife = 365;
	function __construct($id=0,$maxlife=365)
	{
	$this->id = $id;
	$this->maxlife = $maxlife;
	}
}
?>
