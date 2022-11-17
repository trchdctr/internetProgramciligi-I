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
    public function __construct(){
        echo "Construct metodu çalıştı.";
        return $this;
    }

    final public function metota(){
        echo "Final metodu çalıştı.";
        return $this;
    }
    }

    class Miras1 extends Uygulama2{
        public function metota(){
            echo "Miras1 metodu çalıştı.";
            return $this->metota();
        }
    }
    final class Miras2 extends Miras1{
        public function metota($deger){
            echo "Override edildi.";
            return $this;
        }

    }

class Miras3 extends Miras2{
    public function metot1(){
        echo "Son durumda miras3 sınıfı çalıştı.";
    }
}
?>