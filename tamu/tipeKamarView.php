<?php 
    include "../koneksi/koneksi.php";
    include "../auth/session.php";
    require_once('../navbar/navbar_tamu.php');

    $queryTipeKamar = "SELECT * FROM tipe_room";
    $resultTipeKamar = mysqli_query($koneksi, $queryTipeKamar);
    $countTipeKamar = mysqli_num_rows($resultTipeKamar);
?>
<div class="kamar">
    <h3>TIPE KAMAR</h3>
    <hr /> <br />
    <table border="1">  
    <tr>
        <th><b>NO</b></th>
        <th><b>NAMA KAMAR</b></th>
        <th><b>HARGA</b></th>
        <th><b>IMAGE</b></th>
    </tr>
</div>
<style>
         
    .kamar{
    background-color: #A9A9A9;
    height: 680px;
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
        if($countTipeKamar > 0){
            while($dataTipeKamar = mysqli_fetch_array($resultTipeKamar, MYSQLI_NUM)){
                ?>
                <tr>
                    <td class = "value"><?php echo "$dataTipeKamar[0]";?></td>
                    <td class = "value"><?php echo "$dataTipeKamar[1]";?></td>
                    <td class = "value"><?php echo "$dataTipeKamar[2]";?></td>
                    <td class = "value"><?php echo "$dataTipeKamar[3]";?></td>
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