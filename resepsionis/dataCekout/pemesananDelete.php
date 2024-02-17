<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id = $_GET["id_pesanan"];
    $delId = "DELETE FROM pemesanan WHERE id_pesanan='$id'";
    $resultId = mysqli_query($koneksi, $delId);

    if($resultId){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'cekout.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'cekout.php'</script>";
    }
?>
