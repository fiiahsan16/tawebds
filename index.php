<?php
include 'controller/c_Riwayat.php';
$cl = new Riwayat;
$cl->Count();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Pakar Diagnosa Menggunakan Metode Dempster Shafer">
  <meta name="author" content="My Coding">
  <link rel="icon" type="image/png" sizes="16x16" href="assetsA/assets/images/Logo-SP.png">

  <title>Dempster Shafer - Sistem Pakar Diagnosa MERS-CoV</title>

  <!-- SEO -->
  <meta name="keywords" content="Sistem Pakar, Diagnosa Penyakit, Metode Dempster Shafer">

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/business-casual.min.css" rel="stylesheet">
  <style type="text/css">
  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }

  #myBtn:hover {
    background-color: #555;
  }
</style>

<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
}

</script>

</head>
<body>

  <h1 class="site-heading text-center d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Diagnosa Penyakit Anxiety Disorder</span>
    <span class="site-heading-lower">Dempster Shafer</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#" target="_blank" rel="noopener">Sistem Pakar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="diagnosa.php">Diagnosa</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="panduan.php">Panduan</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <br/><br/><br/>
    <div class="container">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h3><center><span class="section-heading-upper">Implementasi Sistem Pakar Diagnosa Anxiety Diosrder Menggunakan Metode Dempster Shafer</span></center></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/home1.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Apa itu</span>
            <span class="section-heading-lower">Anxiety Disorder ?</span>
          </h2>
          <p class="mb-3" >Anxiety Disorder adalah penyakit mental berupa gangguan kecemasan. Cek sekarang apakah kamu terkena Anxiety?
          </p>
          <div class="intro-button mx-auto">
            <h2><a class="btn btn-primary btn-xl" href="diagnosa.php" rel="noopener">DIAGNOSA SEKARANG</a></h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Tentang</span>
              <span class="section-heading-lower">Anxiety Disorder</span>
            </h2>
            <p class="mb-0" style="text-align: justify;">Gangguan kecemasan (anxiety disorder) adalah gangguan psikologis yang dicirikan dengan ketegangan motorik (gelisah, gemetar dan ketidakmampuan untuk rileks), hiperaktivitas (pusing, jantung berdebar-debar atau berkeringat) dan pikiran serta harapan yang mencemaskan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section about-heading">
    <br/><br/><br/>
    <div class="container">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h3><center><span class="section-heading-upper">Sistem Pakar Metode Dempster Shafer</span></center></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p style="color: white;">Total konsultasi : <?php echo $cl->jum; ?><br/>Copyright &copy;2022 <a href="https://id-id.facebook.com/people/Fii-Ahsan-Qauly/100004459748422/">Fii Ahsan Qauly</a></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>

</html>