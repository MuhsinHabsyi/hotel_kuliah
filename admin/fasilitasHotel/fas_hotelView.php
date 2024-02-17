<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $queryHotel = "SELECT * FROM f_hotel";
    $resultHotel = mysqli_query($koneksi, $queryHotel);
    $countHotel = mysqli_num_rows($resultHotel);
    
?>
   <div class="fasilitas">
    <h3>FASILITAS HOTEL</h3>
    <hr /> <br />
    <a href="fas_hotelAdd.php"><input type="submit" name="add" class="buttonadm" value="TAMBAH DATA FASILITAS HOTEL"></a>
    <br> <br> 
    <table border="1">  
    <tr>
        <th><b>NO</b></th>
        <th><b>NAMA</b></th>
        <th><b>IMAGE</b></th>
        <th><b>DESKRIPSI</b></th>
        <th><b>ACTION</b></th>
    </tr>
   </div>

   <style>
         
    .fasilitas{
    background-color: #A9A9A9;
    height: 680px;
    color: black;
    margin: 0;
    padding: 0;
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
        font-family: 'Times New Roman', Times, serif;
    }
    th{
        background-color: whitesmoke;
        color: black;
        height: 30px;
        font-family: 'Times New Roman', Times, serif;
    }
   </style>   

    <?php 
        if($countHotel > 0){
            while($dataHotel = mysqli_fetch_array($resultHotel, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataHotel[0]";?></td>
                    <td class = "value"><?php echo "$dataHotel[1]";?></td>
                    <td class = "value"><img width="100" height="100" src="../../images/cafe.jpg?php echo $dataHotel[2]; ?> title="<?php echo $dataHotel[2];?>"></td>
                    
                    <td class = "value"><?php echo "$dataHotel[3]";?></td>
                    <td class = "value"> 
                        <a href="fas_hotelEdit.php?id=<?php echo"$dataHotel[0]"?>">EDIT</a> |
                        <a href="fas_hotelDelete.php?id=<?php echo"$dataHotel[0]"?>">DELETE</a>
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