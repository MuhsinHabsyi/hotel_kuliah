<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";

    $id = $_GET["id"];
    $delUsers = "DELETE FROM users WHERE id='$id'";
    $resultUsers = mysqli_query($koneksi, $delUsers);

    if($resultUsers){
        echo "<script>alert('Data Berhasil Dihapus !') </script>";
        echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus !')</script>";
        echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
    }
?>
