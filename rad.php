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
              <h1 class="text-dark mt-0">Metode <br> RAD</h1>
			  <h3 class="text-dark mt-0">Alur Metodelogi (Gambar dan penjelasan)</h3>
                <hr class="divider light my-4">
                <img src="foto/RAD.png" class="d-block w-75">
                <p class="text-white mb-4" >
                    <br>
                     &nbsp; &nbsp; &nbsp; RAD merupakan singkatan dari Rapid Application Development. Metode ini juga menggunakan pendekatan iteratif dan inkremental, tetapi lebih menekankan pada tenggat waktu dan efisiensi biaya yang sesuai dengan kebutuhan. 
					 &nbsp; &nbsp; &nbsp; Proses pengembangan dengan Metode RAD dianggap lebih singkat. Pasalnya, semua pihak, baik pelanggan maupun pengembang, terus terlibat secara aktif dalam setiap proses hingga hasil dapat tercapai. Di samping itu, tahapan kerja pada metode ini juga lebih sedikit.
					 <br><br>
					 Berikut adalah Tahapan – tahapan Proses Pengembangan dalam Model Rapid Application Development (RAD), yaitu :<br>
                     <ul style="color:white">
                     <li>Bussiness Modeling<br>
					Fase ini untuk mencari aliran informasi yang dapat menjawab pertanyaan berikut:
					1. Informasi apa yang menegndalikan proses bisnis?<br>
					2. Informasi apa yang dimunculkan?<br>
					3. Di mana informasi digunakan ?<br>
					4. Siapa yang memprosenya ?<br>
					</li><br>
					<li>Data Modeling
					Aliran informasi yang didefinisikan sebagai bagian dari fase bussiness modeling disaring ke dalam serangkaian objek data yang dibutuhkan untuk menopang bisnis tersebut. Karakteristik (atribut) masing-masing objek diidentifikasi dan hubungan antar objek-objek tersebut didefinisikan.
					</li><br>
					<li>Proses Modeling
					Aliran informasi yang didefinisikan di dalam fase data modeling ditransformasikan untuk mencapai aliran informasi yang perlu bagi implementasi sebuah fungsi bisnis. Gambaran pemrosesan diciptakan untuk menambah, memodifikasi, menghapus, atau mendapatkan kembali sebuah objek data.
					</li><br>
					<li>Aplication Generation
					Selain menggunakan bahasa pemrograman generasi ketiga, RAD juga memakai komponen program yang telah ada atau menciptakan komponen yang bisa dipakai lagi. Ala-alat bantu bisa dipakai untuk memfasilitasi konstruksi perangkat lunak.
					</li><br>
					<li>Testing dan Turnover
					Karena proses RAD menekankan pada pemakaian kembali, banyak komponen program telah diuji. Hal ini mengurangi keseluruhan waktu pengujian. Tetapi komponen baru harus diuji dan semua interface harus dilatih secara penuh.
                    </li><br>
                    </ul>
                                    </p>
					<p>
                  <h3 class="text-dark mt-0">Kelebihan dan Kekurangan Metodologi</h3>
                  <p class="text-white mb-1" >
                  <ul style="color:white">
					<li>Beberapa kekurangan dari metode RAD, antara lain dilihat dari segi konsistensi dan kemampuan personel. Metode ini membutuhkan pengembang ahli, sekaligus kerjasama yang aktif dan konsisten antara pemilik proyek beserta semua tim.
					</li>
					<li>Tanpa kedua hal tersebut, mustahil menerapkan metode RAD dalam pengembangan perangkat lunak, apalagi yang berskala besar. Namun jika kedua hal itu terakomodasi dengan baik, metode RAD adalah cara paling efektif untuk menghemat waktu dan biaya.  
                    </li>
                    </ul>
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