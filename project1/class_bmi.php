<?php
class BMI{
    public $berat;
    public $tinggi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function nilaiBMI(){
        return $this->berat / (($this-> tinggi/100)**2);
    }
    public function statusBMI(){
        if($this->nilaiBMI() < 18.5){
            echo 'Kekurangan Berat Badan';
        }else if ($this->nilaiBMI() <= 18.5 && $this->nilaiBMI() <= 24.9){
            echo 'Normal (Ideal)';
        }else if ($this->nilaiBMI() <= 25.0 && $this->nilaiBMI() <= 29.9){
            echo 'Kelebihan Berat Badan';
        }else if ($this->nilaiBMI() > 30.0){
            echo 'Kegemukan (Obesitas)';
        }else{
            echo 'Tidak termasuk kategori';
        }
    }
}
?>