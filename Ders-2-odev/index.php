<html>
<body>
<h2>UYGULAMA - 1</h2>
<h4>Aşağıda verilen yerlere sayı giriniz</h4>

<form action="index.php" method="post">
Faktöriyelinin alınmasını istediğiniz sayıyı giriniz:
<input type="number" name="sayi1"><br>
Girilen sayıya kadar tüm sayıların karesinin yazılmasını istediğiniz sayıyı giriniz:
<input type="number" name="sayi2"><br>
Vize notunuzu giriniz:
<input type="number" name="sayi3"><br>
Final notunuzu giriniz:
<input type="number" name="sayi4"><br>
Faktöriyel hesaplamasının gerçekleşmesini istediğiniz sayıyı giriniz:
<input type="number" name="sayi5"><br>
<input type="submit">
</form>



<?php
//UYGULAMA - 1
class sonuc
{
    public $sayi1 = 7;
    public $degisken2 = 5;


    public function __construct($degisken1, $degisken2, factorial)
    {
      $gdegisken1 = $degisken1 * $degisken1;
      for ($x=$degisken2; $x>=1; $x--)
{
  $factorial = $factorial * $x;
}
    }
}

//print_r($sonuc);


//UYGULAMA - 2
class Metot{
  public $factorial = 1;
  public $notOrt = $sayi3 * 0,4 + $sayi4 *0,6;

public function __construct()
{
  //ortalama hesaplama
  if ($notOrt>=50) {
    echo "Geçtiniz.";
  } else {
    echo "Kaldınız.";
  }
  //faktöriyel hesaplama
  for ($x=$sayi5; $x>=1; $x--)
  {
  $factorial = $factorial * $x;
  }
  echo "Merhaba, bu bir karşılama mesajıdır.";
}
public function __destruct()
{
  echo "Bu mesajı görüyorsanız, destruct metodu devreye girmiştir.";
}

}







 ?>
</body>
</html>
