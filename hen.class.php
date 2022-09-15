<?php
require_once("./animal.class.php");
class hen extends animal
{       
        public $type = "hen";
        public $typeprod = "egg";
        public function GetProd()
        {
        return rand(0,1);
        }
        function __construct($id=0,$maxlife=365)
        {
                parent::__construct($id,$maxlife);
        }

}
?>

