<?php
             include "connect database.php";

             $id = $_POST['update'];

             $sql = "SELECT * FROM user_data WHERE id='$id'";
             $query = mysqli_query($conn, $sql);
             $hasil = mysqli_fetch_assoc($query);
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>dada</title>
</head>
<body>
<form action="update.php?id=<?php echo $id ?>" method="POST">
    <table>
        <tr>
            
            <label for>pendidikan</label><br>
            <input type="text" name="pendidikan" value="<?php echo $hasil['pendidikan']; ?>"><br> 

             <label for>bidang</label><br>
            <input type="text" name="bidang" value="<?php echo $hasil['bidang']; ?>"><br>

             <label for>lokasi</label><br>
            <input type="text" name="lokasi" value="<?php echo $hasil['lokasi']; ?>"><br>

             <label for>gaji</label><br>
            <input type="text" name="gaji" value="<?php echo $hasil['gaji']; ?>"><br>          
           
            
            <input type="submit" name="" value="submit">
        </tr>
    </table>
    </form>
</body>
</html>