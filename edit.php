<?php
$konek = mysqli_connect("localhost", "root", "", "rivky");

$id = $_GET['id'];
$rivky = mysqli_query($konek, "SELECT * FROM rivky_136 where id=$id");
$res = mysqli_fetch_assoc($rivky);
$data = $res;

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $divisi = $_POST["divisi"];
    $jabatan = $_POST["jabatan"];
    $domisili = $_POST["domisili"];
    $insert = mysqli_query($konek, "UPDATE rivky_136 SET nama='$nama', prodi='$prodi', divisi='$divisi', jabatan='$jabatan', domisili='$domisili' where id=$id");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
        echo "<script>
                alert('Selamat data anda berhasil diubah');
        </script>";
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required />
        </p>
        <p>
            <label>Prodi:</label>
            <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" required />
        </p>
        <p>
            <label>Divisi:</label>
            <input type="text" name="divisi" value="<?php echo $data['divisi']; ?>" required />
        </p>
        <p>
            <label>Jabatan:</label>
            <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" required />
        </p>
        <p>
            <label>Domisili:</label>
            <input type="text" name="domisili" value="<?php echo $data['domisili']; ?>" required />
        </p>
        <p>
            <button type="submit" name="submit">Sumbit</button>
        </p>
</body>
</html>