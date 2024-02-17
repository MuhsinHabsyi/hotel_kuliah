<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');
?>
<div class="tambah">
    <h3>TAMBAH DATA BOOKING</h3>
    <br /> <hr /> <br />
    <p>
        <?php 
            if(!isset($_POST['submit'])){

        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" border=0>
                <tr>
                    <td width="27%">Id</td>
                    <td width="4%">:</td>
                    <td width="69%"><input type="text" name="id_pesanan" size="30" placeholder="ID" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pemesan" size="30" placholder="Nama Pemesan" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" size="30" placholder="Email" required></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="number" name="email" size="30" placholder="No HP" required></td>
                </tr>
                <tr>
                    <td>Nama Tamu</td>
                    <td>:</td>
                    <td><input type="text" name="nama_tamu" size="30" placholder="Nama Tamu" required></td>
                </tr>
                <tr>
                    <td height="50">ID Kamar</td>
                        <td>:</td>
                        <td>
                            <label>
                                <select name="id_kamar" required>
                                    <option value="">--=PILIH=--</option>
                                    <option value="standar">Standar</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="president">President</option>
                                </select>
                            </label> 
                            <br />
                    </td>
                </tr>
                <tr>
                    <td>CheckIn</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_cekin" size="30" placholder="CheckIn" required></td>
                </tr>
                <tr>
                    <td>CheckOut</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_cekout" size="30" placholder="CheckOut" required></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="number" name="jml_kamar" size="30" placholder="Jumlah" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga" size="30" placholder="Harga" required></td>
                </tr>
                <tr>
                    <td height="50">Status Kamar</td>
                    <td>:</td>
                    <td>
                        <label>
                            <select name="status_kamar" required>
                                <option value="">--=PILIH=--</option>
                                <option value="pending">Pending</option>
                                <option value="cekin">Check In</option>
                                <option value="cekout">Check Out</option>
                                <option value="reject">Reject</option>
                            </select>
                        </label> <br />
                    </td>
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
                      height: 800px;
                      color: black;
                      }
                </style>

        </form>
        <?php 
            }else{
                $id_pesanan = $_POST["id_pesanan"];
                $nama_pemesan = $_POST["nama_pemesan"];                
                $email = $_POST["email"];
                $no_hp = $_POST["no_hp"];
                $nama_tamu = $_POST["nama_tamu"];
                $kamar = $_POST["kamar"];
                $tgl_cekin = $_POST["tgl_cekin"];
                $tgl_cekout = $_POST["tgl_cekout"];
                $jml_kamar = $_POST["jml_kamar"];
                $harga = $_POST["harga"];
                $status_kamar = $_POST["status_kamar"];

                $insertBooking = "INSERT INTO pemesanan VALUE ('$id_pesanan', '$nama_pemesan', '$email', '$no_hp', '$nama_tamu', '$id_kamar', '$tgl_cekin', '$tgl_cekout',
                '$jml_kamar', '$harga', '$status_kamar')";
                $queryBooking = mysqli_query($koneksi, $insertBooking);

                if($queryBooking){
                    echo "<script>alert('Daftar Berhasil Disimpan !') </script>";
                    echo "<script type='text/javascript'>window.location = 'bookingView.php'</script>";
                }else{
                    echo "<script>alert('Data Gagal Disimpan !')</script>";
                    echo "<script type='text/javascript'>window.location = 'bookingView.php'</script>";
                }

            }
        ?>
        <a href="bookingView.php">&raquo:KEMBALI</a>

    </p>
</body>
</html>