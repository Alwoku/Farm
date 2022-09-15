<?php
require_once("./cow.class.php");
require_once("./hen.class.php");
class farm
{
	private $ids = array();
	private $animals = array();
	public $prod = array();
	public $colN= array();
	private function Get_Max_ID()
	{
		$max=0;
		for($i=0;$i<count($this->ids);$i++)
		{

			if($max<$this->ids[$i])
			{
				$max=$this->ids[$i];
			}

		}
		return $max+1;
	
	}
	public function add_animal($animal)
	{
		$id = $this->Get_Max_ID();
		$animal->id = $id ;
		array_push($this->ids,$id);
		array_push($this->animals,$animal);
	}

	public function GetProd()
	{
		for($i=0;$i<count($this->animals);$i++)
		{
			$type = $this->animals[$i]->typeprod;
			$count=$this->animals[$i]->GetProd();
			$flag=false;
			for($j=0;$j<count($this->prod);$j++)
			{
				if($this->prod[$j][0]==$type)
				{
					$this->prod[$j][1]= $this->prod[$j][1]+$count;
					$flag=true;
					break;
				}
			}
			if($flag==false)
			{
				array_push($this->prod,array($type,$count));
			}
		//	print_r($this->prod);
		}
		
	
	}

	public function GetAnimals(){
		$this->colN = array();
		for($i=0;$i<count($this->animals);$i++){
			$type = $this->animals[$i]->type;
			$flag=false;
			for($j=0;$j<count($this->colN);$j++){

				if($this->colN[$j][0] == $type){

					$this->colN[$j][1] = $this->colN[$j][1] + 1;
					$flag = true;
					break;
				}
			}
			if($flag == false){
				array_push($this->colN , array($type , 1));
			}
		}
		for($i=0;$i<count($this->colN);$i++)
		{
		echo "type animal: ".$this->colN[$i][0]." count:".$this->colN[$i][1]."\r\n";
		}
	}

	public function PrinProd(){

		for($i=0;$i<count($this->prod);$i++)
		{
		echo "type prod: ".$this->prod[$i][0]." count:".$this->prod[$i][1]."\r\n";
		}
	}

	


}


?>
