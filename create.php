<?php
$konek = mysqli_connect("localhost", "root", "", "rivky");
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $domisili = $_POST['domisili'];
    $insert = mysqli_query($konek, "INSERT INTO rivky_136 values('', '$nama', '$prodi', '$divisi', '$jabatan', '$domisili')");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil >= 0) {
        echo "<script>
                alert('sukses');
        </script>";
    }
    else {
        echo "<script>
                alert('gagal');
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
            <input type="text" name="nama" required />
        </p>
        <p>
            <label>Prodi:</label>
            <input type="text" name="prodi" required />
        </p>
        <p>
            <label>Divisi:</label>
            <input type="text" name="divisi" required />
        </p>
        <p>
            <label>Jabatan:</label>
            <input type="text" name="jabatan" required />
        </p>
        <p>
            <label>Domisili:</label>
            <input type="text" name="domisili" required />
        </p>
        <p>
            <button type="submit" name="submit">Sumbit</button>
        </p>
</body>
</html>