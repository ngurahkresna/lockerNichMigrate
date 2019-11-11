<!DOCTYPE html>
<html lang="en">
<head>
    <title>create users</title>
</head>
<body>
    <form method = "POST" action = "tambahuser.php ">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td><select name = "gender">
                   <option value="laki-laki">laki-laki</option>
                   <option value="perempuan">perempuan</option> 
                </select></tr>
            </td>
            <tr>
            <td> <input type="submit" name = "submit" value = "submit"></td>
            </tr>
            
        </table>
    
</body>
</html>