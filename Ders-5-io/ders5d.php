<?php

interface Ornek{
    public function tanim($deger);

}
/*metot yazılıdığı için hata oluşturmaz*/
class Contact implements Ornek{
    public function tanim($deger){
        echo $deger;
    }
}

class AboutUs implements Ornek{
    public function tanim
}
$ornek = new Contact();
$ornek->tanim("Merhaba");

?>