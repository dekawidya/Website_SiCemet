<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">  
    <link rel="shortcut icon" href="foto/logo1.png"> 
    <title>Cari Metodologi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="heroo">
        <h1>Kenali Proyek Anda</h1>
    <form action="hasil.php" method="POST">
        <div class="container1">
            <div class="container-dalam"> 
                <div class="row">
                    <div class="column1" >
                      <h4>Kebutuhan Awal</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="keb" value= "1" required> Dapat dijelaskan</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="keb" value= "2" required> Belum jelas</label>
                        </div>
                    </div>
                    <div class="column4" >
                    </div>
                    <div class="column5">
                    </div>
                </div>
                <div class="row">
                    <div class="column1" >
                      <h4>Kompleksitas</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="komp" value="1" required> Sederhana</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="komp" value="2" required> Kompleks</label>
                        </div>
                    </div>
                    <div class="column4" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="komp" value="3" required> Sangat kompleks</label>
                        </div>
                    </div>
                    <div class="column5">
                    </div>
                </div>
                <div class="row">
                    <div class="column1" >
                      <h4>Waktu Delivery</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="waktu" value="1" required> < 1 bulan</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="waktu" value="2" required> 1-3 bulan</label>
                        </div>
                    </div>
                    <div class="column4" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="waktu" value="3" required> 4-6 bulan</label>
                        </div>
                    </div>
                    <div class="column5">
                        <div class="radio">
                            <label><input type="radio" id='regular' name="waktu" value="4" required> 6-12 bulan</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column1" >
                      <h4>Jumlah Tim (SDM)</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="tim" value="1" required> < 12 orang</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="tim" value="2" required> > 12 orang</label>
                        </div>
                    </div>
                    <div class="column4" >
                    </div>
                    <div class="column5">
                    </div>
                </div>
                <div class="row">
                    <div class="column1" >
                      <h4>Keterampilan Tim</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="ketr" value="1" required> Berpengalaman</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="ketr" value="2" required> Campuran</label>
                        </div>
                    </div>
                    <div class="column4" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="ketr" value="3" required> Tidak berpengalaman</label>
                        </div>
                    </div>
                    <div class="column5">
                    </div>
                </div>
                <div class="row">
                    <div class="column1" >
                      <h4>Klien Terlibat Langsung</h4>
                    </div>
                    <div class="column2" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="klien" value="1" required>Terlibat</label>
                        </div>
                    </div>
                    <div class="column3" >
                        <div class="radio">
                            <label><input type="radio" id='regular' name="klien" value="2" required>Tidak terlibat</label>
                        </div>
                    </div>
                    <div class="column4" >
                    </div>
                    <div class="column5">
                    </div>
                </div>
            </div>
            <div class="flex-parent jc-center">
                <button type="button" class="btn margin-right" style="margin-bottom: 20px;" onclick="window.location.href='form.php'">Bersihkan</button>
                <input type="submit" name="cek" class="btn"></input> 
            </div>
        </div>
    </form>
    </div>
</body>
</html> 