<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id = $_GET["id"];
    $delTipeKamar = "DELETE FROM tipe_room WHERE id='$id'";
    $resultTipeKamar = mysqli_query($koneksi, $delTipeKamar);

    if($resultTipeKamar){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'tipeKamarView.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'tipeKamarView.php'</script>";
    }
?>
