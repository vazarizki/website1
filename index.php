<?php
include "config.php";

if(isset($_POST["buat"])){
  $pekerjaan  = $_POST["pekerjaan"];
  $tujuan     = $_POST["tujuan"];

  $sql = "INSERT INTO form VALUE('','$pekerjaan','$tujuan')";
  $query  = mysqli_query($koneksi,$sql);

  if($query){
    echo "<script> alert('data berhasil dimuat')</script>";
  }else
  echo "<script> alert('data gagal dikirimkan')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skripsian</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <nav>
    <section>
      <div class="container">
        <div class="row">
          <h2>Skripsian</h2>
        </div>
        <div class="row" id="menu" >
          <ul>
            <li><a href="">Buat Survey</a></li>
            <li><a href="">Isi Survey</a></li>
            <li><a href="">FAQ</a></li>
          </ul>
        </div>
      </div>
    </section>
  </nav>
  <!--akhir nav-->
 <!--Section 1-->
<section class="section-1">
  <div class="container">
    <div class="row">
      <img src="/6671.jpg" height="330px">
    </div>
    <div class="row" id="formTrial">
      <h1>Buat Survey Sekarang!</h1>
      <p>*isi form untuk mulai survey mu</p>
      <form action="" method="post" id="trial">
        <input type="text" name="pekerjaan" id="" placeholder="Pekerjaan Saat Ini">
        <input type="text" name="tujuan" id=""placeholder="Tujuan Melakukan Survey"> 
        <button type="submit" name="buat">Buat Survey Sekarang</button>
      </form>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,192L80,165.3C160,139,320,85,480,74.7C640,64,800,96,960,112C1120,128,1280,128,1360,128L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
  </section>

  <section class="section-2">
  <div class="container" id="sdua">
    <div class="row" id="panah">
      <h1>-------></h1>
    </div>
    <div class="row" id="box">
      <h1>Buat Survey</h1>
      <p>Buat Survey kini makin mudah dan terjangkau</p>
      <button>Buat Survey</button>
    </div>
    <div class="row" id="box">
      <h1>Isi Survey</h1>
      <p>Menghasilkan dengan hanya mengisi survey</p>
      <button> Buat Survey</button>
    </div>
    <div class="row" id="panah" >
      <h1> <------- </h1>
    </div>
  </div>
  </section>
 <!--akhir section 1-->
</body>

</html>
