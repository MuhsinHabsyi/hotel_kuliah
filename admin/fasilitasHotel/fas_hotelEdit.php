<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $getFasHotel = $_GET["id"];
    $editFasHotel = "SELECT * FROM f_hotel WHERE id = '$getFasHotel'";
    $resultFasHotel = mysqli_query($koneksi ,$editFasHotel);
    $dataFasHotel = mysqli_fetch_array($resultFasHotel);
?>
    
</body>
</html>


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
                <td width="69%"><input type="text" name="id" size="30" value="<?php echo $dataFasHotel[0]?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Nama Fasilitas</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" value="<?php echo $dataFasHotel[1]?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td>:</td>
                <td><input type="file" name="image" size="30" value="<?php echo $dataFasHotel[2]?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td><input type="text" name="deks" size="30" value="<?php echo $dataFasHotel[3]?>"></td>
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
            $nama = $_POST["nama"];

            // $image = $_POST["image"];
            if($_FILES["image"]["error"]===4){
                echo "<script>alert('Image Does Not Exist')</script>";
            }else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName = $_FILES["image"]["temp_name"];
                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                    echo "<script>alert('Invalid Iamge Extension')</script>";
                }else if($fileSize > 1000000){
                    echo "<script>alert('Image Size is Too Large')</script>";
                }else{
                    $newImageName = uniqid();
                    $newImageName .= '.'. $imageExtension;
                    move_uploaded_file($tmpName, 'img/'. $newImageName);
                }
            }

            $deks = $_POST["deks"];
            

            $updateFasHotel = "UPDATE f_hotel SET id='$id', nama_fasilitas='$nama', img='$newImageName', deks='$deks' WHERE id='$id'";

            $queryFasHotel = mysqli_query($koneksi, $updateFasHotel);

            if($queryFasHotel){
                echo "<script>alert('Daftar Berhasil Diubah !') </script>";
                echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
            }else{
                echo "<script>alert('Data Gagal Diubah !')</script>";
                echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
            }
        }
    ?>
    <a href="fas_hotelView.php">&raquo:KEMBALI</a>
</p>