<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_admin.php');

    $queryBooking = "SELECT * FROM pemesanan";
    $resultBooking = mysqli_query($koneksi, $queryBooking);
    $countBooking = mysqli_num_rows($resultBooking);
?>  
<div class="pesan">
    <h3>DATA PEMESANAN</h3>
    <hr /> <br />
    <a href="bookingAdd.php"><input type="submit" name="add" class="buttonadm" value="TAMBAH DATA BOOKING"></a>
    <br> <br>
    <table border="1">  
    <tr>
        <th><b> Id </b></th>
        <th><b> Nama </b></th>
        <th><b> Email </b></th>
        <th><b> No HP </b></th>
        <th><b> Nama Tamu </b></th>
        <th><b> Kamar </b></th>
        <th><b> CheckIn </b></th>
        <th><b> CheckOut </b></th>
        <th><b> Jumlah </b></th>
        <th><b> Harga </b></th>
        <th><b> Status </b></th>
        <th><b> Action </b></th>
    </tr>
</div>
<style>
         
    .pesan{
    background-color: #A9A9A9;
    height: 680px;
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
        background-color: #cccccc;
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
    <?php 
        if($countBooking > 0){
            while($dataHotel = mysqli_fetch_array($resultBooking, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataHotel[0]";?></td>
                    <td class = "value"><?php echo "$dataHotel[1]";?></td>
                    <td class = "value"><?php echo "$dataHotel[2]";?></td>
                    <td class = "value"><?php echo "$dataHotel[3]";?></td>
                    <td class = "value"><?php echo "$dataHotel[4]";?></td>
                    <td class = "value"><?php echo "$dataHotel[5]";?></td>
                    <td class = "value"><?php echo "$dataHotel[6]";?></td>
                    <td class = "value"><?php echo "$dataHotel[7]";?></td>
                    <td class = "value"><?php echo "$dataHotel[8]";?></td>
                    <td class = "value"><?php echo "$dataHotel[9]";?></td>
                    <td class = "value"><?php echo "$dataHotel[10]";?></td>
                    <td>
                        <a href="bookingEdit.php?id_pesanan=<?php echo"$dataHotel[0]"?>">EDIT</a> |
                        <a href="bookingDelete.php?id_pesanan=<?php echo"$dataHotel[0]"?>">DELETE</a>
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