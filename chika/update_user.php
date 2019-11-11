<?php
             include "connect database.php";

             $id = $_POST['update'];

             $sql = "SELECT * FROM table_search WHERE id='$id'";
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
            
            <label for>hasil pencaharian</label><br>
            <input type="text" name="pencaharian" value="<?php echo $hasil['pencaharian']; ?>"><br> 

                  
           
            
            <input type="submit" name="" value="submit">
        </tr>
    </table>
    </form>
</body>
</html>