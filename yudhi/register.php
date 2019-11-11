<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
</head>
<body>
 <center>
        <form method="post" action="tambahuser.php">
		<table>
		<br>
		
        <tr>
          <td><label>Nama                                </label></td>
          <td colspan="2"><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
          <td><label>Password 		                     </label></td>
          <td colspan="2"><input type="password" name="pass" value=""></td>
        </tr>
        <tr>
          <td><label>Gender                              </label></td>
          <td colspan="2"><input type="radio" name="gender" value="L">L
          	<input type="radio" name="gender" value="P">P</td>
        </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</center>
</body>
</html>