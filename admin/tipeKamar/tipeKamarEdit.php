<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $getId = $_GET["id"];
    $editTipeKamar = "SELECT * FROM tipe_room WHERE id = '$getId'";
    $resultTipeKamar = mysqli_query($koneksi ,$editTipeKamar);
    $dataTipeKamar = mysqli_fetch_array($resultTipeKamar);
?>
<div class ="tambah">
<h3>EDIT FASILITAS HOTEL</h3>

<br><hr><br>
<p>
<?php 
        if(!isset($_POST['submit'])){

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%" border=0>
            <tr>
                <td width="27%">ID</td>
                <td width="4%">:</td>
                <td width="69%"><input type="text" name="id" size="30" value="<?php echo $dataTipeKamar[0]?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Nama Kamar</td>
                <td>:</td>
                <td><input type="text" name="nama_room" size="30" value="<?php echo $dataTipeKamar[1]?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" size="30" value="<?php echo $dataTipeKamar[2]?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td>:</td>
                <td><input type="file" name="img_room" size="30" value="<?php echo $dataTipeKamar[2]?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" id="submit" value="UBAH"></td>
            </tr>
        </table>
        </div>
        <style>
                    .table{
                    background-color: #A9A9A9;
                    height: 300px;
                    color: black;
                    }
                    td{
                        color: black;
                        padding: 10px;
                        height: 10px;
                        font-family: 'Times New Roman', Times, serif;
                      }
                    th{
                         background-color: whitesmoke;
                         color: black;
                         height: 20px;
                         font-family: 'Times New Roman', Times, serif;
                      }
                      .tambah h3{
                      font-family: 'Times New Roman', Times, serif;
                      color: black;
                      font-size: 30px;
                      }
                      .tambah{
                       background-color: #A9A9A9;
                      height: 680px;
                      color: black;
                      }
                </style>
    </form>
    <?php 
        }
        else{
            $id = $_POST["id"];
            $nama_room = $_POST["nama_room"];
            $harga = $_POST["harga"];
            $img_room = $_POST["$img_room"];

            $updateTipeKamar = "UPDATE tipe_room SET id='$id', nama_room='$nama_room',
            harga='$harga', img_room='$img_room' WHERE id='$id'";

            $queryTipeKamar = mysqli_query($koneksi, $updateTipeKamar);

            if($queryTipeKamar){
                echo "<script>alert('Daftar Berhasil Diubah !') </script>";
                echo "<script type='text/javascript'>window.location = 'tipeKamarView.php'</script>";
            }else{
                echo "<script>alert('Data Gagal Diubah !')</script>";
                echo "<script type='text/javascript'>window.location = 'tipeKamarView.php'</script>";
            }
        }
    ?>
    <a href="tipeKamarView.php">&raquo:KEMBALI</a>
</p>