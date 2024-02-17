<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $getId = $_GET["id"];
    $editUsers = "SELECT * FROM users WHERE id = '$getId'";
    $resultUsers = mysqli_query($koneksi ,$editUsers);
    $dataUsers = mysqli_fetch_array($resultUsers);
?>

<h3>EDIT USERS</h3>

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
                <td width="69%"><input type="text" name="id" size="30" value="<?php echo $dataUsers[0]?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" size="30" value="<?php echo $dataUsers[1]?>" ></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" size="30" value="<?php echo $dataUsers[2]?>" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" size="30" value="<?php echo $dataUsers[3]?>" ></td>
            </tr>
            <tr>
                <td height="50">Level</td>
                <td>:</td>
                <td>
                    <label>
                        <select name="level" >
                            <option value="<?php echo $dataUsers[4]?>"><?php echo $dataUsers[4]?></option>
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
                <td><input type="submit" name="submit" id="submit" value="EDIT"></td>
            </tr>
        </table>
    </form>
    <?php 
        }
        else{
            $id = $_POST["id"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"]; 
            $level = $_POST["level"];

            $updateUsers = "UPDATE users SET id='$id', email='$email', username='$username', password='$password', level='$level' WHERE id='$id'";

            $queryUsers = mysqli_query($koneksi, $updateUsers);

            if($queryUsers){
                echo "<script>alert('Daftar Berhasil Diubah !') </script>";
                echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
            }else{
                echo "<script>alert('Data Gagal Diubah !')</script>";
                echo "<script type='text/javascript'>window.location = 'userView.php'</script>";
            }
        }
    ?>
    <a href="userView.php">&raquo:KEMBALI</a>
</p>