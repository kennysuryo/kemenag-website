<?php
        // Create database connection using config file
        include_once("config_ibadah.php");

        // Fetch all users data from database
        $result = mysqli_query($mysqli, "SELECT * FROM rumah_ibadah_budha ORDER BY id ASC");
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tempat Ibadah</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&family=Unbounded:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Fonts -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my icons -->

    <!-- my css -->
    <link rel="stylesheet" href="css/tmpt-ibadah-style.css" />
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <img src="img/KDA.png" alt="logos" class="logo" />

      <div class="navbar-nav">
        <a href="#home">Halaman Utama</a>
        <a href="#stats">Kegiatan</a>
        <a href="#place">Data Tempat Ibadah</a>
        <a href="#umat">Data Penduduk</a>
        <a href="#contact">Kontak Kami</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="cta-login"><i data-feather="user"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Tempat Ibadah Start-->
     <section class="hero-tmpt-ibadah" id="home">
        <main class="content">
          <h1>
            Data Umat Agama Buddha di <span>Yogyakarta</span>
          </h1>
          <p>
            Disini kamu dapat menemukan data dan statistik tentang tempat ibadah agama Buddha
          </p>
        </main>
      </section>
      <!--  Tempat Ibadah End -->

      <!--Navbar Tempat Ibadah Start-->
        <div class="navbar-tmpt-ibadah">
        <a href="#buddha">Buddha</a>
        <a href="#hindu">Hindu</a>
        <a href="#katholik">Katholik</a>
        <a href="#kristen">Kristen</a>
        <a href="#konghuchu">Konghuchu</a>
        </div>
      <!--Navbar Tempat Ibadah End-->

      <!-- Section Buddha Start  -->
      <section id="buddha" class="buddha">
        <h2>Buddha</h2>
        <p>Berupa data tempat ibadah agama Buddha di Seluruh Daerah Istimewa Yogyakarta</p>
        <div class="table-buddha">
            <table class="table-buddha-db">

                <tr>
                <th>Nomor</th><th>Rumah Ibadah</th> <th>Jenis</th> <th>Alamat</th> <th>kabupaten</th><th>Option</th>
                </tr>
                <?php
                while($user_data = mysqli_fetch_array($result)) {         
                  echo "<tr>";
                  echo "<td>".$user_data['id']."</td>";
                  echo "<td>".$user_data['Nama_Rumah_Ibadah']."</td>";
                  echo "<td>".$user_data['Jenis']."</td>";
                  echo "<td>".$user_data['Alamat']."</td>";
                  echo "<td>".$user_data['Kab']."</td>";   
                  echo "<td><a href='edit_buddha.php?id=$user_data[id]' >Edit</a> | <a href='delete_buddha.php?id=$user_data[id]'>Delete</a></td></tr>";        
                }
                ?>
            </table> 
                    
          <a href="file_csv/data_rumah_ibadah/buddha_diy.csv" download class="cta"><i data-feather="download-cloud" class="icon"></i> Download </a>

              
        </div>
      </section>
      <!-- Section Buddha End  -->
        

    <!-- script icon -->
    <script>
      feather.replace();
    </script>
    <!-- script icon -->
  </body>