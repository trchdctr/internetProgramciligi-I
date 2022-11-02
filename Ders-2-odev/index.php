<html>
<head>
<title>Ders - 2 Ödev</title>
</head>
<style>
html{
  scroll-behavior:smooth;
}
body{
  background-color: #252525;
  color: #f2f2f2;
  align-items: center;
  text-align: center;
}
</style>
<body>
    <h1> Uygulama 1</h1>
<?php

use uygulama1 as GlobalClass;

    class uygulama1{

        public function __construct(){
            echo "Construct metodu devreye girdi.";
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Destruct metodu devreye girdi.";
            echo "<br><br>";
        }

        public function puan($vize,$final){



            $notOrt=$vize*0.4 + $final*0.7;
            if ($notOrt>=60) {
                echo "Dersten geçtiniz, notunuz:" . $notOrt;
                echo "<br><br>";
            }
            else{
                echo "Dersten kaldınız, notunuz:" . $notOrt;
                echo "<br><br>";
            }
        }

        public function factorial($x){
            $sonuc=1;
           for ($i=1; $i <= $x; $i++) {
            $sonuc=$i*$sonuc;
           }
           echo "$x sayısının faktöriyeli:" . $sonuc;
           echo "<br>";
        }
    }

    $itsClass = new uygulama1();
    $itsClass->puan(rand(0,100),rand(0,100));
    $itsClass->factorial(rand(1,100));

?>

    <h1> Uygulama 2</h1>

<?php
   class uygulama2 {
      public $sayi1;
      public $sayi2;
      public $sayi3;


      public function __construct($gsayi1,$gsayi2,$gsayi3)
      {
       $sayi1=$gsayi1;
       $sayi2=$gsayi2;
       $sayi3=$gsayi3;
      }


      public function kareAlma($kareAlma){
       $kareAlma = rand(2,15);
       $kareAlma2 = $kareAlma*$kareAlma;
      }

       public function faktorielArtis($giris){
       for ($i=0; $i < $giris; $i++) {
           echo $i*$i;
           echo "<br>";
       }
       }
   }

   $myclass = new uygulama2(rand(1,10),rand(1,10),rand(1,10));
   $myclass ->faktorielArtis(rand(2,10));
   $kareAlma = rand(2,15);
   $kareAlma2 = $kareAlma*$kareAlma;
   echo "<br> $kareAlma2 <br>";

   ?>

</body>
</html>
