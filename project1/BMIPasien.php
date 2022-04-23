<?php
<?php
require_once 'class_pasien.php';
require_once 'class_bmi.php';


    

$psn1 = new pasien("jaya santoso", "L");
$psn2 = new pasien("dono mariadi", "p");
$bmi1 = new bmi(60,163);
$bmi2 = new bmi(55,175);

$bpsn1 = new BMIPasien($bmi1,$psn1);
$bpsn1 -> tanggal = "2022-03-11";
$bpsn2 = new BMIPasien($bmi2,$psn2);
$bpsn2 -> tanggal = "2022-04-14";

$ar_pasien = [$bpsn1,$bpsn2];

$_tanggal = $_POST['Tanggal'];
$_nama = $_POST['nama'];
$_gender = $_POST['gender'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$psn3 = new pasien($_nama, $_gender);
$bmi3 = new bmi($_berat, $_tinggi);
$bpsn3 = new BMIPasien($bmi3,$bpsn3);
$bpsn3 -> tanggal = $_tanggal;

array_push($ar_pasien, $bpsn3);





class BMIPasien extends pasien{
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($bmi, $pasien){
        $this -> bmi = $bmi;
        $this -> pasien = $pasien;
    } 
}
?>