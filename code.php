<?php
session_start();
require 'connect.php';


if(isset($_POST['regis']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $agree = mysqli_real_escape_string($con, $_POST['agree']);


    $query = "INSERT INTO member (username,password,email,agree) VALUES ('$username','$password','$email','$agree')";
    
    $query_run = mysqli_query($con, $query);
    
}
//GakBisa
// if (isset($_POST['simpan'])) {
//     $namafoto = mysqli_real_escape_string($con, $_POST['namafoto']);
//     $foto = mysqli_real_escape_string($con, $_POST['foto']);

//     $rand = rand();
//     $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
//     $filename = $_FILES['foto']['name'];
//     $ukuran = $_FILES['foto']['size'];
//     $ext = pathinfo($filename, PATHINFO_EXTENSION);

//     if (!in_array($ext, $ekstensi)) {
//         //header("location:index.php?alert=gagal_ekstensi");
//     } else {
//         if ($ukuran < 1044070) {
//             $xx = $rand . '_' . $filename;
//             move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
//             mysqli_query($con, "INSERT INTO puzzle VALUES('$namafoto','$xx')");
//             //header("location:index.php?alert=berhasil");
//         } else {
//             //header("location:index.php?alert=gagak_ukuran");
//         }
//     }
// }
//BISA
// if (isset($_POST['simpan'])){
//     $fileName = $_FILES['gambar']['name'];
//      // Simpan ke Database
//      $sql = "INSERT INTO puzzle (namafoto,foto) values ('".$_POST['namafoto']."','$fileName')";
//      mysqli_query($con, $sql);
//      // Simpan di Folder Gambar
//      move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
//      echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>"; 
//     }
//BISA
if(isset($_POST['simpan']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            mysqli_query($con,"INSERT INTO puzzle (gambar,nama_gambar,tipe_gambar,ukuran_gambar) values ('$image','$file_name','$file_type','$file_size')");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>