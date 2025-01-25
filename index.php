<?php
class mobil {

    //propeties
    public $merek;
    public $platNo;

        //method
    

        public function maju(){
            return $this->merek. "Dengan plat nomor".$this->platNo."Telah maju";
        }
}


//object
$bmw = new mobil();
echo $bmw->maju();