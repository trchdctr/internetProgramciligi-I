<?php


interface CRUD
{
    public function Olustur($deger);
    public function Guncelle($deger);
    public function Getir($deger);
    public function Sil($deger);
}

class Test implements CRUD{
    public function Olustur($deger){
    } 
    public function Guncelle($deger){
    } 
    public function Sil($deger){
    } 
    public function Getir($deger){
    } 
}

/*Soyu arayüz sınıfı içerisinde private ve protected kullanılamaz*/
interface CRUD2
{
    private function Olustur($deger);
    protected function Guncelle($deger);
    public function Getir($deger);
    public function Sil($deger);
}

?>