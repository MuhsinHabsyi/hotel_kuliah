<?php 
    include "../koneksi/koneksi.php";
    include "../auth/session.php";
    require_once('../navbar/navbar_tamu.php');

    $queryFasilitasKamar = "SELECT * FROM f_kamar";
    $resultFasilitasKamar = mysqli_query($koneksi, $queryFasilitasKamar);
    $countFasilitasKamar = mysqli_num_rows($resultFasilitasKamar);
?>
<div class="kamar">
    <h3>FASILITAS KAMAR</h3>
    <hr /> <br />
    <table border="1">  
    <tr>
        <th><b>NO</b></th>
        <th><b>NAMA</b></th>
    </tr>

</div>
<style>
.kamar{
    background-color: #A9A9A9;
    height: 680px;
    color: black;
    }
    td{
        color: black;
        
          padding: 10px;
          height: 10px;
           font-family: 'Times New Roman', Times, serif;
     }
    th{
        font-size: 20px;
         background-color: whitesmoke;
         color: black;
         height: 20px;
        font-family: 'Times New Roman', Times, serif;
         }
        table{
        border-collapse: collapse;
        font-size: 10pt;
        border: 1px solid #cccccc;
        background-color: #cccccc;
    }
</style>
    <?php 
        if($countFasilitasKamar > 0){
            while($dataHotel = mysqli_fetch_array($resultFasilitasKamar, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataHotel[1]";?></td>
                    <td class = "value"><?php echo "$dataHotel[2]";?></td>
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