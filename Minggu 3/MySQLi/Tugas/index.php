<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas</title>
</head>
<body>
    <h1>DATA MAHASISWA PENS</h1>
    <h1>===================</h1>
    <h1>TAMBAH DATA</h1>
    
    <form action="tambah.php" method="POST" enctype="multipart/form-data">
        NRP : <input type="text" name="nrp"> <br>
        Nama : <input type="text" name="nama"> <br>
        Foto : <input type="file" name="foto" > <br>
        Jurusan :   <select name="jurusan">
                        <option value="Sains">Sains</option>
                        <option value="Teknik">Teknik</option>
                    </select> <br>
        <input type="submit" name="submit" value="Tambah">
    </form>

    <h1>===================</h1>
    <h1>SEARCH DATA</h1>
    <form action="" method="POST">
        Nama : <input type="text">
        <input type="submit" value="Cari Data">
    </form>
</body>
</html>