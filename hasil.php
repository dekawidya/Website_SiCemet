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
              <a><img src="img/logo.png" alt="" title="" /></img></a>
            </div>
      
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="form.php">Form</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->
      
        <!--==========================
          Hero Section
        ============================-->
        <section id="hero">
        
          <div class="box">
            <div class="dalem-box">
              <h3 Align="center">Metodologi Yang Cocok Untuk Proyek Anda</h3>
              
              <table class="table" Align="center">
                <thead class="thead-dark" Align="center">
                  <tr>
                    <th>Nama Metodologi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <div class="container">
                    <tbody>
                        <?php
                          include "class_decl.php";
                          foreach($methods as $mtd) {
                            if ($mtd->methReqs == $answer[0]) {
                              $mtd->methNear +=1;
                            }
                            if ($mtd->methReqs == $answer[1]) {
                              $mtd->methNear +=1;
                            }
                            if ($mtd->methReqs == $answer[2]) {
                              $mtd->methNear +=1;
                            }
                            if ($mtd->methReqs == $answer[3]) {
                              $mtd->methNear +=1;
                            }
                            if ($mtd->methReqs == $answer[4]) {
                              $mtd->methNear +=1;
                            }
                            if ($mtd->methReqs == $answer[5]) {
                              $mtd->methNear +=1;
                            }
                            }

                          $match = array();
                          foreach($methods as $mtd) {
                            if($mtd->methNear >= 3) {
                              $match[] = $mtd;
                              }
                          }

                        ?>

                      <ul>

                        <?php
                          foreach ($match as $cck) {
                        ?>
                        <tr Align="center">
                          <td>  
                            <span class="metode" style="color:#fff; font-weight: bold;"><?php echo $cck->methName;?></span>
                          </td>
                          <td>
                          <button type="button" class="btn7 btn-sm" name="detail" value="Detail"><a href="<?php echo $cck->methLink;?>">Detail</button>
                          </td>
                        </tr>

                        <?php
                          }
                        ?>
                      </ul>     
                    </tbody>
                </table>
            </div>
          </div>
        </section><!-- #hero -->
    
      
            <!-- JS, Popper.js, and jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
 
    </body>
</html>