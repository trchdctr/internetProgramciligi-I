<?php


// Uygulama-1
class Uygulama1{
    public $degisken1;
    public $degisken2;
    public $degisken3;

     public function __construct($gdegisken1,$gdegisken2,$gdegisken3){
        $this->degisken1 = $gdegisken1;
        $this->degisken2 = $gdegisken2;
        $this->degisken3 = $gdegisken3;
}
    
        public function metot1(){
            echo "metot1 çalıştı.";
        }
    
        public function metot2(){
            echo "metot2 çalıştı.";
        }

}


class YeniUygulama extends Uygulama1{
    public function metot1(){
        echo "YeniUygulama metot1 çalıştı.";
    }

    public function metot2(){
        echo "YeniUygulama metot2 çalıştı.";
    }

}

$nesne1 = new Uygulama1;
$nesne1->metot1();
echo "<br>";
$nesne1->metot2();
echo "<br>";

$nesne2 = new YeniUygulama;
$nesne1->metot1();
echo "<br>";
$nesne1->metot2();
echo "<br>";


// Uygulama-2



class Uygulama2{
    public function __construct($uyg2Deger1){
        $uyg2Deger1="Construct metodu çalıştı.";
        return $this->$uyg2Deger1;
    }

    final public function finalMetot1($uyg2Deger1_1){
        $uyg2Deger1_1= "Final metodu çalıştı.";
        return;
    }
    }

    class Miras1 extends Uygulama2{
        public function finalMetot1($uyg2Deger2){
            $uyg2Deger2 = "Miras1 metodu çalıştı.";
            return $this->finalMetot1();
        }
    }
    final class Miras2 extends Uygulama2{
        public function finalMetot1($uyg2Deger2){
            $uyg2Deger2 = "Override edildi.";
            return $this->finalMetot1();
        }
class Miras3 extends Miras2{
    public function finalMetot1($uyg2Deger3){
        $uyg2Deger3 = "Miras 1 override edildi, son durumda da bu metot çalıştı.";
        return $this->finalMetot1();
    }


}
?>
