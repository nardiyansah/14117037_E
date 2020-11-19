<?php
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $foto = $_FILES["foto"]["name"];
    $jurusan = $_POST["jurusan"];

    $target_dir = getcwd();
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk =1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
    }else{
        echo "no submit";
    }

    $conn = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($conn, "jurusan");
    $cariId = mysqli_query($conn, "SELECT ID_Jur FROM jurusan WHERE Nama='$jurusan'");
    $id = mysqli_fetch_array($cariId)[0];
    $fetch = mysqli_fetch_array($cariId);
    mysqli_select_db($conn, "mahasiswa");
    $sqlstr = "INSERT INTO mahasiswa (NRP, Nama, Foto, ID_Jur) values ('$nrp','$nama','$foto', $id)";
    $hasil = mysqli_query($conn, $sqlstr);
    echo "Data berhasil disimpan";
?>