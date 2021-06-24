<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SiCemet</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700;800;900&display=swap" rel="stylesheet">
        <meta charset="utf-8">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="foto/logo1.png">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">

      </head>
    <body>
        <header id="header">
          <div class="nav-container">
      
            <div id="logo" class="pull-left">
              <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
            </div>
      
            <nav id="nav-menu-container">
            <ul class="nav-menu">
            <li><button type="button" class="btn8" onclick="kembali()" name="cekin" value="Kembali Ke list">LIST METODOLOGI</button></a></li> 
            </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->
      
        <!--==========================
          Konten
        ============================-->
        <section id="hero">
          <div class="box" >
            <div class="dalem-box">
              <h1 class="text-dark mt-0">Metode <br>Incremental</h1>
			   <h3 class="text-dark mt-0">Alur Metodologi (Gambar dan penjelasan)</h3>
                <hr class="divider light my-4">
                <img src="foto/incremental.jpg" class="d-block w-75">
                <p class="text-white mb-4" >
                    <br>
                    
                     &nbsp; &nbsp; &nbsp;Incremental model adalah model pengembangan sistem pada software development berdasarkan requirement software yang dipecah menjadi beberapa fungsi atau bagian sehingga model pengenbangannya secara bertahap. Dengan menggunakan incremental model dapat membantu kita untuk mengurangi biaya sebelum mencapai level dari initial productivity dan mengakselerasi proses dari pembuatan suatu fungsi sistem.
                    <br>
					<br>
					&nbsp; &nbsp; &nbsp;Incremental model menggambarkan suatu proses dimana mengutamakan perhatian pada system requirement dan mengimplementasinya dalam team development. 
					<br>
					<br>
					Tahap – tahap pada incremental model, yaitu:
					<br>
                    <ul style="color:white">
                    <li>Requirement: proses penentuan kebutuhan atau analisis kebutuhan.</li><br>
					<li>Specification: proses spesifikasi dimana menggunakan analisis kebutuhan sebagai acuannya.</li><br>
					<li>Architecture Design: perancangan software yang terbuka agar dapat diterapkan sistem pembangunan per-bagian pada tahapan selanjutnya.</li><br>
					<li>Code: melakukan koding.</li><br>
                    <li>Test:melakukan testing dalam model ini.</li><br>
                    </ul>
                <p>
                  <h3 class="text-dark mt-0">Kelebihan Metodologi</h3>
                  <p class="text-white mb-1" >
                      <ul style="color:white">
                    <li> Merupakan model dengan manajemen yang sederhana</li><br>
					<li>Pengguna tidak perlu menunggu sampai seluruh sistem dikirim untuk mengambil keuntungan dari sistem tersebut. Increment yang pertama sudah memenuhi persyaratan mereka yang paling kritis, sehingga perangkat lunak dapat segera digunakan.</li><br>
					<li>Resiko untuk kegagalan proyek secara keseluruhan lebih rendah. Walaupun masalah masih dapat ditemukan pada beberapa increment. Karena layanan dengan prioritas tertinggi diserahkan pertama dan increment berikutnya diintegrasikan dengannya, sangatlah penting bahwa layanan sistem yang paling penting mengalami pengujian yang ketat. Ini berarti bahwa pengguna akan memiliki kemungkinan kecil untuk memenuhi kegagalan perangkat lunak pada increment sistem yang paling bawah.</li><br>
					<li>Nilai penggunaan dapat ditentukan pada setiap increment sehingga fungsionalitas sistem disediakan lebih awal.</li><br>
					<li>Memiliki risiko lebih rendah terhadap keseluruhan pengembagan sistem</li><br>
                    <li>Prioritas tertinggi pada pelayanan sistem adalah yang paling diuji</li><br>
                    </ul>
                </p>
                <p>
                  <h3 class="text-dark mt-0">Kekurangan Metodologi</h3>
                  <p class="text-white mb-1" >
                      <ul style="color:white">
                    <li>Kemungkinan tiap bagian tidak dapat diintegrasikan</li><br>
					<li>Dapat menjadi build and Fix Model, karena kemampuannya untuk selalu mendapat perubahan selama proses rekayasa berlangsung</li><br>
					<li>Harus Open Architecture</li><br>
					<li>Mungkin terjadi kesulitan untuk memetakan kebutuhan pengguna ke dalam rencana spesifikasi masing-masing hasil increment.</li><br>
                    <li>Membutuhkan waktu yang relative lama untuk menghasilan product yang lengkap</li><br>
                    </ul>
                </p>
               </p>
            </div>
          </div>
        </section><!-- #konten -->
    
      
            <!-- JS, Popper.js, and jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                function kembali() {
                window.history.back();
                }
            </script>
 
    </body>
</html>