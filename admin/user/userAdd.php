<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');
?>
<div class="tambah">
    <h3>TAMBAH USERS</h3>
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
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" size="30" placholder="Email" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" size="30" placholder="Username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" size="30" placholder="Password" required></td>
                </tr>
                <tr>
                    <td height="50">Level</td>
                    <td>:</td>
                    <td>
                        <label>
                            <select name="level" required>
                                <option value="">--=PILIH=--</option>
                                <option value="admin">Admin</option>
                                <option value="resepsionis">Resepsionis</option>
                                <option value="tamu">Tamu</option>
                            </select>
                        </label> <br />
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" id="submit" value="TAMBAH"></td>
                </tr>
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
                      height: 430px;
                      color: black;
                      }
                </style>
            </table>
        </form>
        <?php 
            }else{
                $id = $_POST["id"];
                $email = $_POST["email"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $level = $_POST["level"];

                $insertUsers = "INSERT INTO users VALUE ('$id', '$username', '$password', '$email', '$level')";
                $queryUsers = mysqli_query($koneksi, $insertUsers);

                if($queryUsers){
                    echo "<script>alert('Daftar Berhasil Disimpan !') </script>";
                    echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
                }else{
                    echo "<script>alert('Data Gagal Disimpan !')</script>";
                    echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
                }

            }
        ?>
        <a href="userView.php">&raquo:KEMBALI</a>

    </p>
