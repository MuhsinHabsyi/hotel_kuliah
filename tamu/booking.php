<?php 
    include "../koneksi/koneksi.php";
    include "../auth/session.php";
    require_once('../navbar/navbar_tamu.php');
?>
<div class="pesan">
    <h3>BOOKING KAMAR</h3>
    <hr />
    <p>
        <?php 
            if(!isset($_POST['submit'])){

        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" border=0>
                <tr>
                    <td width="27%"></td>
                    <td width="4%"></td>
                    <td width="69%"><input type="hidden" name="id_pesanan" size="30" placeholder="id pesanan" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pemesan" size="30" placeholder="Nama Pemesan" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" size="30" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="number" name="no_hp" size="30" placeholder="No HP" required></td>
                </tr>
                <tr>
                    <td>Nama Tamu</td>
                    <td>:</td>
                    <td><input type="text" name="nama_tamu" size="30" placeholder="Nama Tamu" required></td>
                </tr>
                <tr>
                    <td height="50">Kamar</td>
                    <td>:</td>
                    <td>
                        <label>
                            <select name="kamar" required>
                                <option value="">--=PILIH=--</option>
                                <option value="standar">Standar</option>
                                <option value="deluxe">Deluxe</option>
                                <option value="president">President</option>
                            </select>
                        </label> <br />
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Check In</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_cekin" size="30" required></td>
                </tr>
                <tr>
                    <td>Tanggal Check Out</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_cekout" size="30" required></td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td><input type="number" name="jml_kamar" size="30" placeholder="Jumlah Kamar" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga" size="30" placeholder="Harga" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" id="submit" value="BOOK"></td>
                </tr>
            </table>
            </div>

            <style>
         
    .pesan{
    background-color: #A9A9A9;
    height: 800px;
    color: black;
    }
    .pesan h3{
        font-family: Arial, Helvetica, sans-serif;
        color: black;
    }
    table{
        border-collapse: collapse;
        font-size: 10pt;
        border: 1px solid #cccccc;
    }
    td{
        padding: 18px;
        height: 10px;
    }
    th{
        background-color: whitesmoke;
        color: black;
        height: 30px;
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
                $status = "pending";

                //input data booking
                $insertBooking = "INSERT INTO pemesanan VALUE ('$id_pesanan','$nama_pemesan','$email','$no_hp',
                '$nama_tamu','$kamar','$tgl_cekin','$tgl_cekout','$jml_kamar','$harga','$status')";
                $queryBooking = mysqli_query($koneksi, $insertBooking);

                if($queryBooking){
                    echo "<script>alert('Daftar Berhasil Disimpan !') </script>";
                    echo "<script type='text/javascript'>window.location = 'index.php'</script>";
                }else{
                    echo "<script>alert('Data Gagal Disimpan !')</script>";
                    echo "<script type='text/javascript'>window.location = 'index.php'</script>";
                }

            }
        ?>

    </p>