<?php

//polymorphism

//hanya sebagai jembatan untuk fungsi' yg ada di dalam class yg berbeda.
interface kendaraan{
    public function maju();
}

class mobil implements kendaraan {

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

class motor implements kendaraan{

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

$avanza = new mobil("Avanza","BO987X");
$rxking = new motor ("RXking","KL987XX");

// fungsi
function tampilkan (kendaraan $avanza){
    return $avanza->maju();
}

echo tampilkan($rxking)."<br/>";
echo tampilkan ($rxking )."\n";