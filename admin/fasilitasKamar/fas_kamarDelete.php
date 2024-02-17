<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id = $_GET["id"];
    $delFasKamar = "DELETE FROM f_kamar WHERE id='$id'";
    $resultFasKamar = mysqli_query($koneksi, $delFasKamar);

    if($resultFasKamar){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
    }
?>
