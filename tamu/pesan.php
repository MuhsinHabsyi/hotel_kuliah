<?php 
    include '../koneksi/koneksi.php';
    include "../auth/session.php";
    require_once('../navbar/navbar_tamu.php');
    include '../resepsionis/cons_status_kamar.php';

    $queryPesan = mysqli_query($koneksi,"SELECT * FROM pemesanan");
    $data = mysqli_fetch_assoc($queryPesan);
    $count = mysqli_num_rows($queryPesan);
?>
<div class="pesan">
<h2>PESAN</h2><br><br>


<style>
.pesan{
    background-color: #A9A9A9;
    height: 680px;
    color: black;
    }
.pesan h3{
    text-align: center;
}
</style>

<?php
    if($count > 0){
        // echo "<script>console.log('this is a Variable: " . $data['status_kamar']. "' );</script>";
        if($data['status_kamar']=="$pending"){
            ?>
            <h3>Pesanan anda masih pending</h3>
            <?php
        }else if($data['status_kamar']=="$cekin"){
            ?>
            <h3>Pesanan anda sudah di acc</h3>
            <?php
        }else if($data['status_kamar']=="$cekout"){
            ?>
            <h3>Pesanan anda sudah di check out</h3>
            <?php
        }else if($data['status_kamar']=="$reject"){
            ?>
            <h3>Pesanan anda di reject</h3>
            <?php
        }
    }
?>
</div>
