<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $queryUser = "SELECT * FROM users";
    $resultUser = mysqli_query($koneksi, $queryUser);
    $countUser = mysqli_num_rows($resultUser);
?>
<div class="user">
    <h3>USERS</h3>
    <hr /> <br />
    <a href="userAdd.php"><input type="submit" name="add" class="buttonadm" value="TAMBAH DATA USER"></a>
    <br> <br>
    <table border="1">  
    <tr>
        <th><b>ID</b></th>
        <th><b>EMAIL</b></th>
        <th><b>USERNAME</b></th>
        <th><b>PASSWORD</b></th>
        <th><b>LEVEL</b></th>
        <th><b>ACTION</b></th>
    </tr>
</div>

<style>
         
    .user{
    background-color: #A9A9A9;
    height: 680px;
    color: black;
    }
    .user h3{
        font-family: Arial, Helvetica, sans-serif;
        color: black;
    }
    table{
        border-collapse: collapse;
        font-size: 10pt;
        border: 1px solid #cccccc;
        background-color: #cccccc;
    }
    td{
        padding: 15px;
        height: 10px;
    }
    th{
        background-color: whitesmoke;
        color: black;
        height: 30px;
    }

   </style> 
    <?php 
        if($countUser > 0){
            while($dataUser = mysqli_fetch_array($resultUser, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataUser[0]";?></td>
                    <td class = "value"><?php echo "$dataUser[1]";?></td>
                    <td class = "value"><?php echo "$dataUser[2]";?></td>
                    <td class = "value"><?php echo "$dataUser[3]";?></td>
                    <td class = "value"><?php echo "$dataUser[4]";?></td>
                    <td>
                        <a href="userEdit.php?id=<?php echo"$dataUser[0]"?>">EDIT</a> |
                        <a href="userDelete.php?id=<?php echo"$dataUser[0]"?>">DELETE</a>
                    </td>
                <tr>
                </tr>

        <?php 
            }
        }else{
            echo "<tr>
                <td colspan='9' align='center' height='20'>
                    <div>Belum Ada Data</div>
                </td>
            </tr>";
        }
        echo "</table>";
        ?>
</body>
</html>