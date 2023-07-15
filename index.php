<?php
  require "config.php";
  if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  } else {
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="./public/favicon/icon.png" />
  <!-- apple touch icon -->
  <link rel="apple-touch-icon" href="./public/favicon/icon.png" />
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <title>Mimoto</title>
  <style> 
body{ 
background-image:url(./public/images/bg1.jpg); 
background-size:cover; 
background-attachment: fixed; } 
p{ color:white; } 
</style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <div class="logo">
        <a href="#top"><img src="./public/favicon/logo.jfif" alt="logo"></a>
      </div>
      <div class="title">
        <h1>SATUDARAH</h1>
      </div>
      <div class="menu">
        <a href="#top">Home</a>
        <a href="#profile">Profil</a>
        <a href="#vision">Visi dan misi</a>
        <a href="#product">Produk kami</a>
        <a href="#contact">Kontak kami</a>
        <a href="#about">Tentang kami</a>
      </div>
    </div>
  
  <div class="wrapper-main">
    <div class="side-menu">
      <ul>
        <li><a href="#article">Artikel</a></li>
        <li><a href="#event">Event</a></li>
        <li><a href="#gallery">Galeri foto</a></li>
        <li><a href="#client">Testimonial</a></li>
        <li class="username">Hallo!! <?php echo $row["name"]; ?> </li>
        <li><a href="logout.php"><button>Logout</button></a></li>
      </ul>
    </div>
    <div class="content">
      <article id="home">
        <h2>SATUDARAH</h2>
        <p>
          Selamat datang di dunia yang penuh gairah dan kebebasan, dunia klub motor. Dalam lingkungan ini, pengendara motor berkumpul untuk mengeksplorasi kecepatan, petualangan, dan persaudaraan yang erat. Saya ingin mengajak Anda untuk menjelajahi perusahaan yang bergerak di bidang klub motor, tempat di mana passion dan kecintaan terhadap dunia roda dua bertemu.
        </p>
      </article>
      <article id="profile">
        <h2>Profil</h2>
        <p>Perusahaan kami adalah pionir dalam industri klub motor yang berkomitmen untuk memberikan pengalaman terbaik kepada para pengendara motor. Dengan pengalaman bertahun-tahun di industri ini, kami telah membangun reputasi sebagai pemimpin yang handal dan terpercaya. Berikut kelebihan perusahaan kami.</p>
        <ol type="1">
          <li>Komunitas yang Solid</li>
          <li>Pengetahuan Mendalam</li>
          <li>Acara dan Kegiatan yang Menarik</li>
          <li>Kesadaran akan Keselamatan dan Lingkungan</li>
        </ol>
      </article>
      <article id="vision">
        <h2>Visi Kami</h2>
        <p>Visi perusahaan adalah menciptakan ruang di mana pengendara motor dapat berkumpul, saling berbagi pengalaman, dan memperkuat ikatan dalam semangat persaudaraan. Klub motor ini bukan hanya tempat untuk menunjukkan keahlian mengendarai motor, tetapi juga sebagai wadah bagi mereka yang ingin mempelajari lebih banyak tentang budaya motor, keamanan berkendara, dan kesadaran akan lingkungan sekitar.</p>
      </article>
      <article id="product">
        <h2>Produk Kami</h2>
        <p>Sebagai perusahaan yang bergerak di bidang klub motor, kami menyediakan beragam produk yang dirancang khusus untuk memenuhi kebutuhan dan keinginan para pengendara motor. Produk-produk kami mencakup:</p>
        <ol type="1">
          <li>Aksesori Motor: Kami menawarkan berbagai aksesori motor berkualitas tinggi yang dapat meningkatkan performa, keamanan, dan gaya kendaraan. Mulai dari helm, jaket, sarung tangan, sepatu, hingga sistem audio dan pencahayaan, kami memiliki beragam pilihan aksesori yang dapat dipilih sesuai dengan preferensi dan gaya berkendara masing-masing anggota klub motor kami.</li>
          <li>Perlengkapan Berkendara: Kami menyediakan perlengkapan berkendara yang penting untuk menjaga keselamatan dan kenyamanan saat berada di jalan. Ini termasuk perlengkapan seperti topi balaclava, kacamata pelindung, raincoat, dan pelindung tubuh seperti pelindung siku, lutut, dan bahu. Kami mengutamakan kualitas dan keandalan produk kami untuk memastikan perlindungan maksimal bagi pengendara motor.</li>
          <li>Pakaian Kasual: Selain perlengkapan khusus berkendara, kami juga menyediakan pakaian kasual dengan desain yang keren dan stylish untuk memenuhi gaya hidup pengendara motor. Mulai dari kaos, kemeja, jaket, hingga topi dan aksesori lainnya, pakaian kasual kami mencerminkan semangat dan kecintaan terhadap motor.</li>
          <li>Perlengkapan Perawatan Motor: Kami juga menyediakan perlengkapan perawatan motor yang diperlukan untuk menjaga kondisi motor tetap prima. Produk-produk ini termasuk oli mesin, pelumas rantai, cairan pendingin, dan produk pembersih untuk menjaga kebersihan dan keandalan motor.</li>
          <p>Selain produk-produk tersebut, kami juga menghadirkan layanan konsultasi dan rekomendasi produk kepada anggota klub motor kami. Tim kami yang berpengetahuan luas akan membantu para pengendara motor dalam memilih produk yang tepat sesuai dengan kebutuhan dan anggaran mereka.</p>
          <p>Kami yakin bahwa produk-produk yang kami jual tidak hanya memberikan kualitas yang baik, tetapi juga mencerminkan semangat dan identitas pengendara motor. Kami terus memperbarui dan melengkapi inventaris produk kami dengan yang terbaru dan terbaik di industri untuk memastikan kepuasan dan kebutuhan para anggota klub motor kami terpenuhi.</p>
          <p>Dengan berbagai produk yang kami tawarkan, kami berharap dapat memenuhi kebutuhan dan keinginan para pengendara motor, memperkuat komunitas klub motor, dan memberikan pengalaman berkendara yang lebih baik bagi semua anggota klub kami.</p>
        </ol>
      </article>
      <article id="contact">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jalan Pegangsaan Timur No. 99, Kota Jakarta, Indonesia.</p>
        <p>Nomor Telepon: +62-783-090021</p>
        <p>Fax: +62-783-090021</p>
        <p>Email: info@mimoto.com</p>
        <p>Tim kami siap melayani pertanyaan, permintaan, dan kebutuhan Anda terkait klub motor kami. Jika Anda memiliki pertanyaan lebih lanjut tentang produk, acara, keanggotaan, atau layanan kami, jangan ragu untuk menghubungi kami melalui nomor telepon, email, atau melalui formulir kontak di situs web kami.</p>
        <p>Kami sangat bersemangat untuk berkomunikasi dengan Anda dan menjawab segala pertanyaan yang Anda miliki. Kami akan merespons dengan cepat dan memberikan bantuan yang Anda perlukan.</p>
        <p>Terima kasih atas minat dan dukungan Anda terhadap perusahaan klub motor kami. Kami berharap dapat membantu Anda dengan layanan dan informasi yang diperlukan, serta menjadi bagian dari perjalanan berkendara Anda.</p>

      </article>
      <article id="about">
        <h2>Tentang kami</h2>
        <p>Perusahaan kami berdiri pada tahun yang indah di tahun 1987 dengan visi yang kuat untuk menyatukan penggemar motor dalam sebuah komunitas yang penuh semangat dan kecintaan terhadap dunia roda dua. Pada awalnya, sekelompok pengendara motor yang bersemangat memutuskan untuk membentuk sebuah klub yang akan menjadi tempat berkumpul bagi para pecinta motor. 
          Sejak berdiri, perusahaan kami telah bekerja keras untuk menciptakan berbagai acara dan kegiatan yang menarik bagi para anggota klub motor. Kami mengadakan perjalanan wisata motor, pertemuan rutin, dan berbagai kompetisi yang melibatkan keahlian mengendarai motor. Kami juga menyediakan akses ke informasi terkini tentang motor, aksesori, dan teknologi terkini yang berkaitan dengan dunia motor.
          Seiring berjalannya waktu, perusahaan kami terus berinovasi dan berkembang untuk memenuhi kebutuhan dan harapan para anggota klub motor. Kami berkomitmen untuk memberikan pengalaman terbaik kepada para pengendara motor, baik yang baru mulai maupun yang sudah berpengalaman.</p>
      </article>
      <article id="article">
        <h2>Artikel</h2>
        <div class="article">
          <div class="article-1">
            <h3>
              <a href="https://nasional.kompas.com/read/2015/05/01/100900030/Aksesori.Sepeda.Motor.Paling.Diburu">
                Aksesori Sepeda Motor Paling Diburu - Kompas.com
              </a>
            </h3>
            <p>Dipaprkan, kumpulan komponen atau aksesori yang sering dipasang untuk mempercantik sepeda motor baru dan tidak mengubah standar yang lain ...</p>
          </div>
          <div class="article-1">
            <h3>
              <a href="https://www.idntimes.com/automotive/motorbike/seo-intern/aksesoris-motor-yang-lagi-trend">
                10 Aksesoris Motor yang Lagi Tren dan Banyak Dicari
              </a>
            </h3>
            <p>10 Aksesoris Motor yang Lagi Tren dan Banyak Dicari · 1. Socket charger handphone · 2. Box motor · 3. Alarm motor · 4. Fairing · 5. Helm retro · 6.</p>
          </div>
          <div class="article-1">
            <h3>
              <a href="https://my-best.id/lists/111559">8 Rekomendasi Produk Perawatan Sepeda Motor - mybest</a>
            </h3>
            <p>Pada artikel kali ini, saya akan merekomendasikan beberapa produk yang wajib kalian miliki untuk memudahkan perawatan harian. Creator Image. Bukhori Muslim ...</p>
          </div>
          <div class="article-1">
            <h3>
              <a href="https://www.federaloil.co.id/detail/umum/ngaku-anak-motor-nih-rekomendasi-pakaian-untuk-menunjang-gaya-hidup-bikers-masa-kini">Ngaku Anak Motor, Nih Rekomendasi Pakaian untuk ...</a>
            </h3>
            <p>Ngaku Anak Motor, Nih Rekomendasi Pakaian untuk Menunjang Gaya Hidup Bikers Masa Kini · Federal Oil - Pakaian safety saat ini tidak hanya sebatas ...</p>
          </div>
        </div>
      </article>
      <article id="event">
        <h2>Event</h2>
        <div class="article">
          <div class="article-1">
            <h3>
                Perjalanan Wisata Motor ke Kebumen
            </h3>
            <p>17 Januari 2024</p>
            <p>Organisasi perjalanan wisata motor ke destinasi menarik adalah salah satu event yang populer di klub motor. Peserta dapat mengikuti rute yang telah dirancang sebelumnya, menjelajahi pemandangan alam yang indah, dan merasakan kebebasan berkendara dalam kelompok yang menyenangkan.</p>
          </div>
          <div class="article-1">
            <h3>
                Pameran Motor SCBD
            </h3>
            <p>21 Januari 2025</p>
            <p>Memamerkan berbagai jenis motor, aksesori, dan teknologi terkini kepada anggota klub motor. Pameran ini juga dapat mencakup demo produk, diskusi teknis, dan penawaran khusus kepada anggota klub.</p>
          </div>
          <div class="article-1">
            <h3>
              Pelatihan Keselamatan Berkendara
            </h3>
            <p>30 April 2024</p>
            <p>Pelatihan keselamatan berkendara. Pelatihan ini dapat meliputi teknik pengereman, manuver menghindar, dan pemahaman tentang aturan lalu lintas.</p>
          </div>
        </div>
      </article>
      <article id="gallery">
        <h2>Galeri foto</h2>
        <div class="gallery">
          <img src="./public/images/01.jpg" alt="gallery" />
          <img src="./public/images/02.webp" alt="gallery" />
          <img src="./public/images/03.webp" alt="gallery" />
          <img src="./public/images/04.png" alt="gallery" />
          <img src="./public/images/05.jpg" alt="gallery" />
          <img src="./public/images/06.jpg" alt="gallery" />
        </div>
      </article>
      <article id="client">
        <div class="header-testimonial">
          <h2>Testimonials</h2>
        </div>
        <div class="wrapper-testimonial">
          <div class="testimonial">
            <div class="body-testimonial">
              <img src="./public/images/clients/p1.png" alt="">
              <h3 class="name">Putin</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p>Mantaps</p>
            </div>
          </div>
          <div class="testimonial">
            <div class="body-testimonial">
              <img src="./public/images/clients/p3.png" alt="">
              <h3 class="name">Garnacho</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p>Awesome</p>
            </div>
          </div>
          <div class="testimonial">
            <div class="body-testimonial">
              <img src="./public/images/clients/p1.png" alt="">
              <h3 class="name">Evan Dimas</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Good</p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
  </div>
</body>
</html>
