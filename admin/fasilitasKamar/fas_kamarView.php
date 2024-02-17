<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $queryFasilitasKamar = "SELECT * FROM f_kamar";
    $resultFasilitasKamar = mysqli_query($koneksi, $queryFasilitasKamar);
    $countFasilitasKamar = mysqli_num_rows($resultFasilitasKamar);
?>
    <div class="fasilitas">
    <h3>FASILITAS KAMAR</h3>
    <hr /> <br />
    <a href="fas_kamarAdd.php"><input type="submit" name="add" class="buttonadm" value="TAMBAH DATA FASILITAS KAMAR"></a>
    <br> <br>
    <table border="1">  
    <tr>
        <th><b>ID</b></th>
        <th><b>ID KAMAR</b></th>
        <th><b>NAMA</b></th>
        <th><b>ACTION</b></th>
    </tr>
  </div>

  <style>
         
    .fasilitas{
    background-color: #A9A9A9;
    height: 680px;
    color: black;
    }
    .fasilitas h3{
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        font-size: 30px;
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
        if($countFasilitasKamar > 0){
            while($dataHotel = mysqli_fetch_array($resultFasilitasKamar, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataHotel[0]";?></td>
                    <td class = "value"><?php echo "$dataHotel[1]";?></td>
                    <td class = "value"><?php echo "$dataHotel[2]";?></td>
                    <td class = "value"> 
                        <a href="fas_kamarEdit.php?id=<?php echo"$dataHotel[0]"?>">EDIT</a> |
                        <a href="fas_kamarDelete.php?id=<?php echo"$dataHotel[0]"?>">DELETE</a>
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