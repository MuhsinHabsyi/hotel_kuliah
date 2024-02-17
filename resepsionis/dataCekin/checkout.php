<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    include "../cons_status_kamar.php";

    $getId = $_GET["id_pesanan"];
    $pendingAcc = "SELECT * FROM pemesanan WHERE id_pesanan = '$getId'";
    $resultPendingAcc = mysqli_query($koneksi ,$pendingAcc);
    $dataPendingAcc = mysqli_fetch_array($resultPendingAcc);
 
        $updatePendingAcc = "UPDATE pemesanan SET status_kamar='$cekout' WHERE id_pesanan='$getId'";

        $queryPendingAcc = mysqli_query($koneksi, $updatePendingAcc);
    
        if($queryPendingAcc){
            echo "<script>alert('Daftar Berhasil Diubah !') </script>";
            echo "<script type='text/javascript'>window.location = 'cekin.php'</script>";
        }else{
            echo "<script>alert('Data Gagal Diubah !')</script>";
            echo "<script type='text/javascript'>window.location = 'cekin.php'</script>";
        }
        
    ?>
