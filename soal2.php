<?php
class Buah {
  private $nama;
  private $warna;

  function set_nama($n) {
    $this->name = $n;
  }
    
  protected function set_warna($n) {
    $this->color = $n;
  }
    
  function get_nama() {
    return $this->name;
  }
    
  protected function get_warna() {
    return $this->color;
  }
   
}

/* soal */
// buat buah dengan nama jeruk dan berwarna kuning dengan menggunakan class Buah
// buat buah dengan nama salak dan berwarna coklat dengan menggunakan class Buah

// tulis kode mu disini
class BuahBaru extends Buah{
    public function beri_warna($n) {
       $this->set_warna($n);
    }
    public function ambil_warna() {
       return $this->get_warna();
    }

 }

$jeruk= new BuahBaru();
$jeruk->set_nama("jeruk");
$jeruk->beri_warna("kuning");
$salak= new BuahBaru();
$salak->set_nama("salak");
$salak->beri_warna("coklat");

echo "Nama Buah <b>".$jeruk->get_nama()."</b> , ";
echo "Warna Buah ".$jeruk->ambil_warna()."<br>";
echo "Nama Buah <b>".$salak->get_nama()."</b> , ";
echo "Warna Buah ".$salak->ambil_warna()."<br>";
?>