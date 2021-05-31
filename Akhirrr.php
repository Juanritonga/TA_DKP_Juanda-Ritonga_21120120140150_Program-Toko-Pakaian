<html>
<header>
  <link rel="stylesheet" href="style.css">
  <h1>Toko Pakaian JR</h1>
  <h2>Welcome honey</h2>
  <h3>Masukkan Nama Anda</h3>
  <h3>Pilih Pakaian yang Ingin di Beli</h3>
</header>
<table>
<tr>
<td>
Pakaian yang anda beli adalah : <br>
<?php
  if(isset($_POST['kaos'])){
    $kaos = $_POST['kaos'];
    for($i=0;$i<count($kaos);$i++){
      $urut = $i+1;
      if(isset($_POST['jkaos'.$urut])){
      $jumlah = (int)$_POST['jkaos'.$urut];
      }else{
        $jumlah = 0;
      }
      $harga = $jumlah * 45000;
      echo $urut." ".$kaos[$i]." "."Dengan Harga 45000 Jumlah ".$jumlah." Total Harga ".$harga."<br>";
    }
  }
?></td></tr>
  <tr>
  <td>
Celana yang anda beli adalah : <br>
<?php
   if(isset($_POST['celana'])){
    $celana = $_POST['celana'];
    for($i=0;$i<count($celana);$i++){
      $urut = $i+1;
      if(isset($_POST['jcelana'.$urut])){
        $jumlah = (int)$_POST['jcelana'.$urut];
        }else{
        $jumlah = 0;
      }
      $harga = $jumlah * 140000;
      echo $urut." ".$celana[$i]." "."Dengan Harga 140000 Jumlah ".$jumlah." Total Harga ".$harga."<br>";
    }
  }
?></td></tr>
<?php
  class Pakaian{
    protected $harga;
    protected $jumlah;
    protected $hargatotal = 0.0;

    public function __construct($harga){
      $this->harga = $harga;
    }
    public function setJumlah($jmlh){
      $this->jumlah = $jmlh;
    }
    public function setHargaTotal(){
        $this->hargatotal = $this->harga * $this->jumlah;
    }
    public function getHarga(){
      return $this->harga;
    }
    public function getHargaTotal(){
      return $this->hargatotal;
    }
    public function getJumlah(){
      return $this->jumlah;
    }
  }

  $totalbelanja = 0.0;
  $kaosTerbeli = [];
  $celanaTerbeli = [];
    if(isset($_POST['kaos'])){
      $kaosTerpilih = $_POST['kaos'];
      for($i=0;$i<count($kaosTerpilih);$i++){
        $urut = $i+1;
        $kaos = new Pakaian(45000);
        if(isset($_POST['jkaos'.$urut])){
          $kaos->setJumlah((int)$_POST['jkaos'.$urut]);
        }else{
          $kaos->setJumlah(0);
        }
        $kaos->setHargaTotal();
        array_push($kaosTerbeli,$kaos);
      }
    }

    if(isset($_POST['celana'])){
      $celanaTerpilih = $_POST['celana'];
      for($i=0;$i<count($celanaTerpilih);$i++){
        $urut = $i+1;
        $celana = new Pakaian(140000);
        if(isset($_POST['jcelana'.$urut])){
          $celana->setJumlah((int)$_POST['jcelana'.$urut]);
        }else{
          $celana->setJumlah(0);
        }
        $celana->setHargaTotal();
        array_push($celanaTerbeli,$celana);
      }
    }
    

    // Mengeluarkan semua total harga kaos terbeli
    for($i=0;$i<count($kaosTerbeli);$i++){
      $totalbelanja += $kaosTerbeli[$i]->getHargaTotal();
    }

    // Mengeluarkan semua total harga kaos terbeli
    for($i=0;$i<count($celanaTerbeli);$i++){
      $totalbelanja += $celanaTerbeli[$i]->getHargaTotal();
    }

    print("<br>"."Total pembelanjaan sebesar Rp. ".$totalbelanja);