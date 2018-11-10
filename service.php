<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head.php');
  ?>
</head>

<body>
  <?php
  include('header.php');
  ?>
  <!-- Subhead
================================================== -->
  <section id="subintro">

    <div class="container">
      <div class="row">
        <div class="span4">
          <h3>Our <strong>services</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="./">Home</a><span class="divider">/</span></li>
            <li class="active">About</li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <?php
  if(isset($_GET['id'])){
    echo '<input type="hidden" id="params" value="' .$_GET['id']. '">';
  }
  ?>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a id="satu-btn" class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <i id="satu-icon" class="icon-caret-down"></i> PT ARTHA GRAHA SAMUDERA </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    Kegiatan pengusahaan kapal merupakan pokok dari perusahaan pelayaran. Kegiatan pengusahaan/pengoperasian kapal sendiri.
                    <ol type="a">
                      <li>
                        Dioperasikan sendiri<br>
                        Pemilik kapal menjadi operator kapal milik sepenuhnya dengan menetapkan dan melaksanakan trayek, schedule, rencana produksi, crewing, dan memelihara armadanya. Pemilik memperoleh seluruh pendapatan freight dan membiayai seluruh biaya operasinya. Perusahaan dapat juga mengoperasikan kapal yang dicharter dari pihak ketiga, dimana perusahaan pelayaran menanggung biaya variable sedangkan biaya tetap sesuai dengan perjanjian charter kapal yang disepakati.
                      </li>
                      <li>
                        Disewakan kepada pihak ketiga<br>
                        Dalam hal ini kapal yang dioperasikan disewakan / dicharter kepada pihak ketiga, perusahaan pelayaran akan menerima pendapatan charter dan membiayai beberapa biaya sesuai dengan perjanjian charter (<i>charter party</i>). Beberapa perjanjian charter yang berlaku adalah sebagai berikut :
                        <ul>
                          <li>
                            Bareboat Charter<br>
                            Mencharter kapal untuk jangka waktu tertentu. Perusahaan pelayaran menyerahkan kapalnya kepada pencharter anak buah kapal, pendapatan yang diperoleh adalah hanya pendapatan charter dan hampir semua biaya menjadi tanggung jawab pencharter.
                          </li>
                          <li>
                            Time Charter<br>
                            Kegiatan pencharteran kapal untuk jangka waktu tertentu. Kapal diserahkan lengkap dengan anak buah kapal dan perlengkapan, pendapatan yang diperoleh adalah pendapatan charter dan menanggung biaya yang terkait dengan kapal dan anak buah kapal (antara lain : maintenance kapal, biaya anak buah kapal, asuransi, penyusutan dan beban overhead).
                          </li>
                          <li>
                            Voyage Charter<br>
                            Kegiatan pencharteran kapal untuk satu voyage atau lebih dari sati pelabuhan ke satu atau beberapa pelabuhan tujuan. Harga sewa / charter sering disebut <i>freight</i>, dimana seluruh biaya operasi menjadi beban pemilik kapal.
                          </li>
                        </ul>
                      </li>
                    </ol>
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a id="dua-btn" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                <i id="dua-icon" class="icon-caret-right"></i> PT ARTHA GRAHA STUWARINDO </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Pelaksana pekerjaan bongkar dan muat barang dari kapal ke atas dermaga atau langsung keatas truck pengangkut ataupun langsung ke atas kapal penerima lain nya (<i>transshipment</i> ataupun <i>ship to ship</i>) dan sebaliknya. Kegiatan ini juga disebut sebagai <i>Board Stevedoring</i>. Untuk menunjang kegiatan ini diperlukan penyediaan forklift yang sesuai.
                  </p>
                  <p>
                    Kegiatan <i>board stevedoring</i> ini juga mencakup kemampuan untuk menangani muatan berat atau sering disebut <i>Heavy Lift</i> yang memerlukan keahlian tertentu dengan menggunakan peralatan khusus yang sesuai (<i>Heavy Lift Gears</i>).
                  </p>
                  <p>
                    <i>Cargo Doring</i> sebagai kepanjangan ataupun mitra kerja yang menerima barang bongkaran dari kapal untuk dibawa ke tempat penumpukan di dalam Gudang atau ke lapangan penumpukan ataupun sebaliknya mengumpan barang yang akan dimuatkan ke atas kapal dari tempat pengumpulkan dengan menyediakan peralatan angkut yang diperlukan.
                  </p>
                  <p>
                    <i>Cargo Doring</i> juga bekerja sama dengan petugas E.M.K.L di dalam penyiapan dokumen yang bersangkutan surat jalan untuk barang import maupun surat pengantar untuk barang export. Kedua jenis kegiatan ini akan secara bersinergi berkemampuan untuk menangani barang muatan berat (<i>Heavy Lift</i>),Muatan Cair (<i>Liquid Cargo</i>) sampai-sampai pada barang berbahaya (<i>Dangerous Goods</i>).
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a id="tiga-btn" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                <i id="tiga-icon" class="icon-caret-right"></i> PT ARTHA GRAHA KENCANA </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Perusahaan yang bergerak dalam pemberian jasa untuk kepentingan pemilik barang (shipper)/consignee, dengan lingkup pekerjaan :
                    <ul>
                      <li>Mengurus dokumen (custom clearance dan dokumen lainnya yang diperlukan)</li>
                      <li>Penerimaan muatan yang diangkut dari pemilik barang untuk diserahkan kepada pihak pengangkut</li>
                      <li>Penerimaan muatan dari pihak pengangkut untuk diserahkan kepada pemilik barang</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
        </div>
      </div>
      <div class="row">
        <div class="span12">
        </div>
      </div>
    </div>
  </section>
  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; Artha Graha 2018
            </p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Plato
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.refineslide.js"></script>
  <script src="assets/js/animate.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

  <script type="text/javascript">
    $( document ).ready(function() {
      $('#service').addClass('active');
      var hehe = $('#params').val();
      if(hehe == 2){
        $('#satu-btn').removeClass('active');
        $('#satu-icon').removeClass('icon-caret-down');
        $('#satu-icon').addClass('icon-caret-right');
        $('#collapseOne').addClass('in');
        $('#collapseOne').css('height','0px');

        $('#dua-btn').addClass('active');
        $('#dua-icon').removeClass('icon-caret-right');
        $('#dua-icon').addClass('icon-caret-down');
        $('#collapseTwo').removeClass('in');
        $('#collapseTwo').css('height','auto');
      }
      else if (hehe == 3) {
        $('#satu-btn').removeClass('active');
        $('#satu-icon').removeClass('icon-caret-down');
        $('#satu-icon').addClass('icon-caret-right');
        $('#collapseOne').addClass('in');
        $('#collapseOne').css('height','0px');

        $('#tiga-btn').addClass('active');
        $('#tiga-icon').removeClass('icon-caret-right');
        $('#tiga-icon').addClass('icon-caret-down');
        $('#collapseThree').removeClass('in');
        $('#collapseThree').css('height','auto');
      }
    });
  </script>


</body>

</html>
