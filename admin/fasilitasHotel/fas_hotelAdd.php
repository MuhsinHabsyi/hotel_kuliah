

<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');
?>
    <div class="tambah">
    <h3>TAMBAH FASILITAS HOTEL</h3>
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
                    <td>NAMA FASILITAS</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="30" placholder="Nama Fasilitas" required></td>
                </tr>
                <tr>
                    <td>Image Fasilitas</td>
                    <td>:</td>
                    <td><input type="file" name="image" id="image" size="30" placholder="Image" required></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="deks" size="100" placholder="Deskripsi" required></td>
                </tr>
                
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" id="submit" value="TAMBAH"></td>
                </tr>
            </table>

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

            </div>
        </form>


        <?php 
            }else{
                $id = $_POST["id"];
                $nama = $_POST["nama"];


                //still error, can't upload image
                $fileName = $_FILES["image"]["name"];
                $tmpName = $_FILES["image"]["temp_name"];
                $location = '../../images/'.$fileName;
                move_uploaded_file($tmpName, $location);

                $deks = $_POST["deks"];

                $insertFasHotel = "INSERT INTO f_hotel VALUE ('$id', '$nama', '$fileName', '$deks')";
                $queryFasHotel = mysqli_query($koneksi, $insertFasHotel);

                if($queryFasHotel){
                    echo "<script>alert('Daftar Berhasil Disimpan !') </script>";
                    echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
                }else{
                    echo "<script>alert('Data Gagal Disimpan !')</script>";
                    echo "<script type='text/javascript'>window.location = 'fas_hotelView.php'</script>";
                }



            }
        ?>
        <div class="kembali">
        <a href="fas_hotelView.php">&raquo:KEMBALI</a>
        </div>

        <style>
            .kembali{
                font-family: 'Times New Roman', Times, serif;
                
            }
        </style>
    </p>
