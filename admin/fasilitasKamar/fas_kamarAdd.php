<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');
?>
   <div class="tambah">
    <h3>TAMBAH FASILITAS KAMAR</h3>
    <br /> <hr /> <br />
    <p>
        <?php 
            if(!isset($_POST['submit'])){

        ?>
        
        <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" border=0>
                <tr>
                    <td width="27%">ID</td>
                    <td width="4%">:</td>
                    <td width="69%"><input type="text" name="id" size="30" placeholder="ID" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>ID Kamar</td>
                    <td>:</td>
                    <td><input type="text" name="id_tipekamar" size="30" placholder="ID Kamar" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_fasilitas" size="30" placholder="Nama" required></td>
                </tr>
                
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" id="submit" value="TAMBAH"></td>
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
            }else{
                $id = $_POST["id"];
                $id_tipekamar = $_POST["id_tipekamar"];
                $nama_fasilitas = $_POST["nama_fasilitas"];

                $insertFasKamar = "INSERT INTO f_kamar VALUE ('$id', '$id_tipekamar', '$nama_fasilitas')";
                $queryFasKamar = mysqli_query($koneksi, $insertFasKamar);

                if($queryFasKamar){
                    echo "<script>alert('Daftar Berhasil Disimpan !') </script>";
                    echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
                }else{
                    echo "<script>alert('Data Gagal Disimpan !')</script>";
                    echo "<script type='text/javascript'>window.location = 'fas_kamarView.php'</script>";
                }

            }
        ?>
        <a href="fas_kamarView.php">&raquo:KEMBALI</a>

    </p>
