<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id_pesanan = $_GET["id_pesanan"];
    $delBooking = "DELETE FROM pemesanan WHERE id_pesanan='$id_pesanan'";
    $resultBooking = mysqli_query($koneksi, $delBooking);

    if($resultBooking){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'bookingView.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'bookingView.php'</script>";
    }
?>
