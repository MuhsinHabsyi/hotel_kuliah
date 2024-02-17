<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id = $_GET["id"];
    $delFasHotel = "DELETE FROM f_hotel WHERE id='$id'";
    $resultFasHotel = mysqli_query($koneksi, $delFasHotel);

    if($resultFasHotel){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
    }
?>
