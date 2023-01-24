<?php
session_start();
require 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="code.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="namagambar" class="form-label">Nama Gambar</label>
        <input type="text" class="form-control" id="username" name="namafoto" placeholder="Enter Nama Gambar">
		<br>
        <label>Gambar :</label>
		<input type="file" name="gambar" required="required">
		<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
	</div>			
			<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </form>


</body>
</html>