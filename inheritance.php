<?php 

include "class.php";

class motor extends mobil{

    public function mundur(){
        return $this->merek." Dengan plat nomor".$this->platNo." Telah mundur";
    }
}

$cbr = new motor("cbr","0XVC99");
echo $cbr->mundur();