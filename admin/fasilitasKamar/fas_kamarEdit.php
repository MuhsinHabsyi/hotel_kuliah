<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $getFasKamar = $_GET["id"];
    $editFasKamar = "SELECT * FROM f_kamar WHERE id = '$getFasKamar'";
    $resultFasKamar = mysqli_query($koneksi ,$editFasKamar);
    $dataFasKamar = mysqli_fetch_array($resultFasKamar);
?>
<div class="tambah">
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
                <td width="69%"><input type="text" name="id" size="30" value="<?php echo $dataFasKamar[0]?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>ID Kamar</td>
                <td>:</td>
                <td><input type="text" name="id_tipekamar" size="30" value="<?php echo $dataFasKamar[1]?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_fasilitas" size="30" value="<?php echo $dataFasKamar[2]?>"></td>
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
            $id_tipekamar = $_POST["id_tipekamar"];
            $nama_fasilitas = $_POST["nama_fasilitas"];

            $updateFasKamar = "UPDATE f_kamar SET id='$id', id_tipekamar='$id_tipekamar',
            nama_fasilitas='$nama_fasilitas' WHERE id='$id'";

            $queryFasKamar = mysqli_query($koneksi, $updateFasKamar);

            if($queryFasKamar){
                echo "<script>alert('Daftar Berhasil Diubah !') </script>";
                echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
            }else{
                echo "<script>alert('Data Gagal Diubah !')</script>";
                echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
            }
        }
    ?>
    <a href="fas_kamarView.php">&raquo:KEMBALI</a>
</p>