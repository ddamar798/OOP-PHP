<?php
class mobil {

    //propeties
    public $merek;
    public $platNo;

        //method
    public function __construct($mrk,$pn){
        $this->merek = $mrk;
        $this->platNo = $pn;
    }

        public function maju(){
            return $this->merek. "Dengan plat nomor ".$this->platNo." Telah maju";
        }
}


//object
$bmw = new mobil("BMW","0X777");
echo $bmw->maju();