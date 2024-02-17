<?php 
include "../auth/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">HOTEL - RESEPSIONIS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="dataPending/pending.php">Data Pending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataCekin/cekin.php">Data Check In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataCekout/cekout.php">Data Check Out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataRejected/rejected.php">Data Rejected</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../auth/logout.php">Logout</a>
                    </li>
                </ul>
        </div>
    </div>
    
    </nav>
    </div>
        <!-- BUAT NAVIGASI -->
    <div class="banner">
        <img src="../images/hotel.png">
        <h1>Selamat Datang di Hotel Kami</h1>      

        <a href=""><button>Selengkapnya</button></a>
    </div>

    <style>
        
.banner{
    background-color: #A9A9A9;
    height: 680px;
    text-align: center;
    color: black;
}
.banner img{
    margin-top: 50px;
    height: 350px;
    border-radius: 10px;
    
}
.banner h1{
    margin-top: 25px;
    margin-bottom: 10px;
}

.banner button{
    margin-top: 5px;
    padding: 10px;
    width: 400px;
    border-radius: 50px;
    border: none;
}
.banner button:hover{
    background-color: bisque;
}

    </style>

        <!-- BUAT room -->
    <div class="room">
        <h1>ROOM</h1>
        <div class="room-kiri">
        <img src="../images/standar.jpg">
        <p><h3>Kamar Standar</h3></p>
        <p>kelas kamar terbawah dan hanya memiliki fasilitas yang terbatas, seperti tempat tidur, AC, TV, perlengkapan mandi, dan air minum.</p>
        </div>

        <div class="room-tengah">
        <img src="../images/deluxe.jpg">
        <p><h3>Kamar Deluxe</h3></p>
        <p> memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa dipilih, double bed atau twin bed. segi interior kamar ini lebih mewah.</p>
        </div>

        <div class="room-kanan">
        <img src="../images/president.jpg">
        <p><h3>Kamar President</h3></p>
        <p>kamar dilengkapi dengan TV layar datar, area tempat duduk, meja, ketel listrik, kulkas, dan kamar mandi dalam dengan shower, bak mandi, dan pengering rambut. Presidential Suite adalah tipe kamar hotel yang terbaik dan paling mahal, </p>
        </div>
    </div>

    <style>

.room{
    text-align: center;
    color: rgb(40, 38, 38);
    margin-top: 90px;
   
   
}

.room-kiri img{
    margin-top: 30px;
    height: 150px;
    border-radius: 10px;
}
.room-tengah img{
    margin-top: 30px;
    height: 150px;
    border-radius: 10px;
}
.room-kanan img{
    margin-top: 30px;
    height: 160px;
    border-radius: 10px;
    width: 250px;
}
.room-kiri,.room-tengah,.room-kanan{
    width: 540px;
    height: 600px;
    background-color: #DCDCDC;
    text-align: center;
    margin: 70px 20px 20px 55px;
    border-radius: 10px;
    float: left;
    padding: 70px 30px;
    align-items: center;
    
}
.room-kiri:hover,.room-tengah:hover,.room-kanan:hover{
    background-color: grey;
    color: rgb(14, 17, 19);
}

.room  h3, p{
    margin-top: 35px;
    margin-bottom: 13px;
    padding: 0px 20px;
}

    </style>

       <!-- BUAT FASILITAS -->

    <div class="fasilitas">
        <h1>FASILITAS</h1>
        <div class="fasilitas-kiri">
        <img src="../images/cafe.jpg">
        <p><h3>Cafe</h3></p>
        <p> menawarkan beragam hidangan, minuman, dan suasana yang menyenangkan bagi tamu hotel maupun pengunjung umum.</p>
        </div>

        <div class="fasilitas-tengah">
        <img src="../images/kolam.jpg">
        <p><h3>Kolam</h3></p>
        <p>menawarkan fasilitas kolam renang yang luas, bersih, dan terawat dengan baik.juga dilengkapi dengan area berjemur, pemandangan kota, dan layanan katering. Selain itu,  dilengkapi dengan fasilitas tambahan seperti bar kolam renang, handuk, dan layanan penyewaan perlengkapan renang.</p>
        </div>

        <div class="fasilitas-kanan">
        <img src="../images/gym.jpg">
        <p><h3>Gym</h3></p>
        <p>dilengkapi dengan berbagai peralatan olahraga dan kebugaran, seperti treadmill, sepeda statis, dumbbell, dan mesin angkat beban. juga menawarkan kelas olahraga, seperti yoga atau pilates.</p>
        </div>
    </div>
        
        <style>

.fasilitas{
    text-align: center;
    color: rgb(40, 38, 38);
    margin-top: 0px auto;
    margin-top: 900px;
    
}

.fasilitas-kiri img{
    margin-top: 30px;
    height: 150px;
    border-radius: 10px;
}
.fasilitas-tengah img{
    margin-top: 30px;
    height: 150px;
    border-radius: 10px;
}
.fasilitas-kanan img{
    margin-top: 30px;
    height: 160px;
    border-radius: 10px;
    width: 250px;
}
.fasilitas-kiri,.fasilitas-tengah,.fasilitas-kanan{
    width: 540px;
    height: 600px;
    background-color:  #DCDCDC;
    text-align: center;
    margin: 70px 20px 20px 55px;
    border-radius: 10px;
    float: left;
    padding: 70px 30px;
    
}
.fasilitas-kiri:hover,.fasilitas-tengah:hover,.fasilitas-kanan:hover{
    background-color: grey;
    color: aliceblue;
}

</style>

<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-5   ">
    <font color=#000> Copyright &copy; 2023 - Universitas Komputer Indonesia <br />
        Developed By <br /><a href="#" target="_new" style="text-decoration:none; color:#363737;">Muhsin Askari - 10522041 <br /> 
        Rifal Ramdani - 10522053 <br /> Daffa Husain - 10522065</a> 
    </font>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>