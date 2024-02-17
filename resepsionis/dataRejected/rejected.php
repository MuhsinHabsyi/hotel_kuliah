<?php 
    include "../../koneksi/koneksi.php";
    include "../../auth/session.php";
    require_once('../../navbar/navbar_resepsionis.php');
    include "../cons_status_kamar.php";

    $queryRejected = "SELECT * FROM pemesanan WHERE status_kamar = '$reject'";
    $resultRejected = mysqli_query($koneksi, $queryRejected);
    $countRejected = mysqli_num_rows($resultRejected);
?>
<div class="resep">
    <h3>DATA REJECTED</h3>
    <hr /> <br />
    <table border="1">  
    <tr>
        <th><b>Id</b></th>
        <th><b>Nama</b></th>
        <th><b>Email</b></th>
        <th><b>No HP</b></th>
        <th><b>Nama Tamu</b></th>
        <th><b>Id Kamar</b></th>
        <th><b>CheckIn</b></th>
        <th><b>CheckOut</b></th>
        <th><b>Jumlah </b></th>
        <th><b>Harga</b></th>
        <th><b>Status</b></th>
        <th><b>Action</b></th>
    </tr>
</div>
<style>
    .resep{
    
   
    background-color: #A9A9A9;
    height: 680px;
    text-align: center;
    color: black;
}
 .resep table{
    
    background-color: #cccccc;
                    height: 200px;
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
</style>
    <?php 
        if($countRejected > 0){
            while($dataHotel = mysqli_fetch_array($resultRejected, MYSQLI_NUM)){
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
                        <a href="rejectedDelete.php?id_pesanan=<?php echo"$dataHotel[0]"?>">DELETE</a>
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