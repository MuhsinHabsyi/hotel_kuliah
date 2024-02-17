<?php 
    include "../koneksi/koneksi.php";
    include "../auth/session.php";
    require_once('../navbar/navbar_tamu.php');

    $queryHotel = "SELECT * FROM f_hotel";
    $resultHotel = mysqli_query($koneksi, $queryHotel);
    $countHotel = mysqli_num_rows($resultHotel);
?>

    <h3>FASILITAS HOTEL</h3>
    <hr /> <br />
    <table border="1">  
    <tr>
        <th><b>NO</b></th>
        <th><b>NAMA</b></th>
        <th><b>IMAGE</b></th>
        <th><b>DESKRIPSI</b></th>
    </tr>

    <?php 
        if($countHotel > 0){
            while($dataHotel = mysqli_fetch_array($resultHotel, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataHotel[0]";?></td>
                    <td class = "value"><?php echo "$dataHotel[1]";?></td>
                    <td class = "value"><?php echo "$dataHotel[2]";?></td>
                    <td class = "value"><?php echo "$dataHotel[3]";?></td>
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