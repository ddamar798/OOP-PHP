<?php 

include "class.php";

class motor extends mobil{

    public function mundur(){
        return $this->merek." Dengan plat nomor".$this->platNo." Telah mundur";
    }
}

//object
$cbr = new motor("cbr","0XVC99");
echo $cbr->mundur()."\n";

$vesmet = new motor ("Vespa Matic","0PX99X8");
echo $vesmet->maju();