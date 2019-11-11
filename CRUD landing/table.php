<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<a href="landing.php">masukan data</a>
    <table border=solid black 1px>
        <tr>
            <th>id</th>
            <th>pendidikan</th>
            <th>bidang</th>
            <th>lokasi</th>
            <th>gaji</th>
        </tr>
        <?php
        include "connect database.php";
        $sql = "select*from user_data";
        $query = mysqli_query($conn,$sql);
        while($hasil = mysqli_fetch_assoc($query)){


        ?>
        <tr>
            <td><?php echo $hasil['id']; ?></td>
            <td><?php echo $hasil['pendidikan']; ?></td>
            <td><?php echo $hasil['bidang']; ?></td>
            <td><?php echo $hasil['lokasi']; ?></td>
            <td><?php echo $hasil['gaji']; ?></td>
            <td>
                <form action="update_user.php" method="POST">
                <button type="submit" name="update" value= "<?php echo $hasil['id']; ?>">update</button>
                </form>
                <form action="delete.php" method="POST">
                <button type="submit" name="delete" value= "<?php echo $hasil['id']; ?>">delete</button>
                </form>
            </td>
        </tr>
        <?php  } ?>
    </table>
    
</body>
</html>