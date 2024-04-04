<!-- KONEKSI PHPMYADMIN -->

<?php
require 'functions.php';

$id = $_GET['id_artikel'];
$query = query("SELECT * dul from artikel inner join tbl_kategori on tbl_kost.kategori=tbl_kategori.id_kategori WHERE id = $id")[0];

// $apakek = query("SELECT id, nama_kategori from tbl_kost inner join tbl_kategori on tbl_kost.kategori=tbl_kategori.id_kategori");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="Website Icon"type="png" href="/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">

    <!-- FOOTER -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>Berita 3</title>

    <!-- FONT INTER -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

     <!-- CTA WASSAPP -->
     <a href="https://wa.wizard.id/fe9977" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- AKHIR CTA WASSAP -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light fixed">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="70" height="70" alt="">
          </a>      
          <!-- <a class="navbar-brand bold" href="#">PPDI Kota Bogor</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentangkami.html">Tentang Kami</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="artikel.html">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donasi.html">Donasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sukarelawan.html">Sukarelawan</a>
              </li>
            </ul>
            <div class="topnav-right">
              <a class="btn btn-primary" href="https://forms.gle/C4qgRErM5FoRqHid6" role="button">Bergabung Komunitas</a>
            </div>
          </div>
        </div>
      </nav>
  
    <!-- AKHIR NAVBAR -->

    <!-- CONTAINER -->
    <div class="container">
        <h2> Penggunaan Jalur Khusus Bagi Disabilitas di Bogor Kerap Berbenturan, PPDI Singgung Sosialisasi </h2>
        <!-- BANNER -->
        <div class="shadow " style="border-radius: 25px;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="banner">
                    <img class="d-block w-100" src="artikel/Artikel 3.jpg" alt="First slide">
                </div>
        </div>
        </div>
        <!-- AKHIR BANNER -->

        <br><br>
        <h6>20/10/2022 - Oleh Rahmat Hidayat </h6>
        <br>
        <div class="paragraf">
          <?php
                  foreach ($apakek as $key):
                    # code...
                  ?>
                  <a href="kospria.php?id=<?php echo $key['id']?>" class="dropdown-item"
                    ><?php echo $key['nama_kategori']?></a
                  >
              <?php endforeach ?>
            <!-- <p><span>
                Penyedia fasilitas khusus bagi penyandang disabilitas di Kota Bogor harus diperhatikan. Fasilitas khusus ini dirasa penting bagi para penyandang disabilitas salah satunya yakni jalur khusus bagi disabilitas di jalan Kota Bogor.
            </span></p>
            <p>
                Pemkot Bogor memang diketahui kerap kali melakukan perbaikan dan peningkatan pedestrian yang ada dengan ditambah penyedian khusus jalur bagi disabilitas.
            <p> Namun, sejauh ini, kadangkala penyediaan fasilitas khusus tersebut luput dari kekhususan.</p>
                Masih banyak yang tidak menganggap hal tersebut penting.
            </p>
            <p>
            Padahal, hal itu yang bisa memudahkan bagi para penyandang disabilitas untuk melakukan kesehariannya.
            <p>Pembangunan yang sedianya untuk memberikan fasilitas, namun dalam pelaksanaannya kerap kali timpang dan justru memunculkan masalah baru.
            </p>
            <p>
                Jalur itu masih belum bisa dikatakan khusus sebab masih bertabrakan dengan mobilitas yang ada.<br><br>
                Sekretaris DPC Perkumpulan Penyandang Disabilitas Indonesia ( PPDI) M Taufik Nurrohim menjelaskan, hal tersebut sudah seharusnya harus bisa diminimalisir.
            </p>
            <p>
            "Semoga kedepannya hal tersebut bisa diminimalisir dengan adanya informasi yang jelas yang diberikan oleh pihak pemberi kerja kepada pelaksana kerja," kata Taufik saat dihubungi TribunnewsBogor.com.
            <p>Taufik menjelaskan, sudah seharusnya pelaksana memberikan sosialisasi dan pemahaman guna mencegah miskomunikasi kepada para penyandang disabilitas.
            </p>
            <p>Selama ini, kata Taufik, para penyandang disabilitas berpatokan kepada UU no. 8 th 2016 tentang Disabilitas serta turunya PP no 42 th 20220 tentang akses pelayanan publik bagi Disabilitas.
            <p>"Untuk itu penting nya pemahaman bersama terhadap ragam disabilitas yang punya kekhususan tersendiri. Kurangnya sosialisasi dan pemahaman ini lah yang sering menyebabkan miskomunikasi dan berdampak pada pelaksanaan di lapangan," jelasnya.
            <p>
                Taufik pun tidak menampik bahwasanya hal ini adalah PR bersama yang harus terus dikerjakan supaya solusi yang dihasilkan bisa maksimal bagi para disabilitas.
                Pihaknya mengajak semua pihak agar memahami disabilitas dan mengajak untuk memperbaiki semuanya.
            
            <p>"Ini PR kita bersama untuk saling memperbaiki segala kekurangan yang ada dan tidak harus mencari siapa yang salah. Karena sudah terjadi tinggal mari bersama kita perbaiki dan jadikan pengalaman sebagai guru. Agar tidak terjadi kesalahan yang sama," tandanya.
            </p> -->
        </div>
        <br>
        <h2>Artikel lainnya</h2>
    
        <!-- ARTIKEL BOX -->
       
            <div class="blog-container">

                <!-- BOX 1 -->
              <div class="zoom">
                <div class="blog-box">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                            <img src="artikel/Artikel 1.jpg" alt="Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-text">
                        <span style="font-size: 12px;">18 July 2023 / Artikel</span> 
                        <a href="#" class="blog-title"><b>Kota Bogor Sepakati Penyediaan Peradilan bagi Penyandang Disabilitas bersama PPDI</b></a>
                        <p>Pemerintah Kota (Pemkot) Bogor bersama Pengadilan Negeri (PN) Bogor sepakat dalam penyediaan peradilan bagi penyandang disabilitas. Kesepakatan itu merupakan turunan dari PP Nomor 39 Tahun 2016 dan Perda Nomor 2 Tahun 2021.</p>
                        <a class="btn" href="baca1.html" role="button" style="background-color:#3494B2;"> Selengkapnya </a>
                        </div>
                </div>
              </div>

                <!-- BOX 2-->
              <div class="zoom">
                <div class="blog-box">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                            <img src="artikel/Artikel 2.JPG"Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-text">
                        <span style="font-size: 12px;">18 July 2023 / Artikel</span> 
                        <a href="#" class="blog-title"><b>Peringati HUT RI Ke 77, PPDI DPC Kota Bogor Berbagi Eforia Bersama Puluhan Disabilitas</b></a>
                        <p>Masih dalam waktu memperingati hari Kemerdekaan RI yang menginjak 77 tahun, Persatuan Penyandang Disabilitas Indonesia (PPDI) DPC Kota Bogor bersama Yayasan Penyandang Disabilitas (YPD), mengadakan acara dalam rangka memperingati HUT RI ke 77 ini, di Taman Heulang Kecamatan Tanah Sareal Kota Bogor, Kamis (25/08/22).!</p>
                        <a class="btn" href="baca2.html" role="button" style="background-color:#3494B2;"> Selengkapnya </a>
                        </div>

                </div>
              </div>

                <!-- BOX 3 -->
              <div class="zoom">
                <div class="blog-box">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                            <img src="artikel/Artikel kegiatan.jpeg" alt="Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-text">
                        <span style="font-size : 12px">18 July 2023 / Perjalanan</span> 
                        <a href="#" class="blog-title"><b>Mengembangkan Solidaritas dan Meningkatkan Kualitas Hidup Agenda Perkumpulan</b></a>
                        <p>Dalam upaya untuk menciptakan masyarakat yang inklusif dan memberikan dukungan kepada individu dengan disabilitas, berbagai organisasi dan perkumpulan telah didirikan di seluruh Indonesia. Salah satu perkumpulan yang berperan penting dalam hal ini adalah Perkumpulan Penyandang Disabilitas Indonesia (PPDI). Dalam artikel ini, kita akan menjelajahi agenda rutin yang diadakan oleh PPDI pada hari-hari tertentu dalam seminggu.
                        </p>
                        <a class="btn" href="baca6.html" role="button" style="background-color:#3494B2;"> Selengkapnya </a>
                        </div>

                </div>
              </div>

         </div>
            

        <!-- AKHIR ARTIKEL -->


        
    </div>

    <!-- AKHIR CONTAINER -->


 <!-- Footer -->
<footer class="footer">
  <div class="footer-left">
      <h3> <b> PPDI KOTA BOGOR</b></h3>
      <div class="logo">
          <img src="images/logo.png" alt="">
      </div>
      <p class="footer-copyright">@2023 Tadika Mesra</p>
  </div>

  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker" style="background-color: #3494B2;"></i>
          <p> <a href="https://maps.app.goo.gl/h8TfgepQ7PhRroPdA">Loka Bina Karya, Tegal Gundil Bogor</a></p>
      </div>
      <div>
          <i class="fa fa-phone" style="background-color: #3494B2;"></i>
          <p>087781166562</p>
      </div>
      <div>
          <i class="fa fa-envelope" style="background-color: #3494B2;"></i>
          <p><a href="#">dpcppdiktbogor@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
      <h3> <b>Bergabung Sekarang</b></h3>
          <p class="footer-about">
              Dapatkan Informasi seputar Teman Disabilitas 
              dan artikel terbaru lainnya!
          </p>

      <!-- POP UP -->

          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 25px; margin-top: 10px; background-color: #3494B2; color: #ffffff;"> <b>
              Subscribe </b>
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Bergabung Sekarang!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <h6><b>Subscribe Now !</b></h6>
                          <p>
                              Dapatkan Informasi seputar Teman Disabilitas 
                              dan artikel terbaru lainnya!
                          </p>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="col-form-label">Email:</label>
                          <input type="text" class="form-control" id="email">
                        </div>
                      </form>
                    </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="border-radius: 25px;">Batal</button>
                  <button type="button" class="btn" style="background-color: #3494B2; border-radius: 25px; color: #ffffff;">Simpan</button>
                  </div>
              </div>
              </div>
          </div>
      <!-- AKHIR POP UP -->

      <div class="footer-media" style="margin-left: -0px;">
          <a href="https://www.youtube.com/@SDBOGOR/featured" style="background-color: #205E71;"><i class="fa fa-youtube"></i></a>
          <a href="https://www.instagram.com/dpc.ppdi.kotabogor.22/" style="background-color: #205E71;"><i class="fa fa-instagram" ></i></a>
      </div>
     
  </div>
  

</footer>

<!-- AKHIR FOOTER -->

</body>
</html>