<?php
$konek = mysqli_connect("localhost", "root", "", "rivky");
$hasil = [];
$res = mysqli_query($konek, "SELECT * FROM rivky_136");
while ($res2 = mysqli_fetch_assoc($res)) {
    $hasil[] = $res2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Focus Admin: Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <nav>
                                    <h4>Daftar Pengurus UKM FT EECOM 2022</h4>
                                </nav>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Prodi</th>
                                                    <th>Divisi</th>
                                                    <th>Jabatan</th>
                                                    <th>Domisili</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                foreach ($hasil as $res3):   
                                                ?>
                                                <tr>
                                                    <td><?php
                                                            echo $res3["nama"];
                                                        ?>        
                                                    </td>
                                                    <td><?php
                                                            echo $res3["prodi"];
                                                    ?>    
                                                    </td>
                                                    <td><?php
                                                            echo $res3["divisi"];
                                                    ?>  
                                                    </td>
                                                    <td><?php
                                                            echo $res3["jabatan"];
                                                    ?>
                                                    </td>
                                                    <td><?php
                                                            echo $res3["domisili"];
                                                    ?>
                                                    </td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $res3["id"];?>">Edit</a> |
                                                        <a href="delete.php?id=<?php echo $res3["id"];?>">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php 
                                                    endforeach;
                                                 ?>
                                                </table>
                                                <button>
                                                    <a href="create.php">Tambah</a>
                                                </button>
                                                
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>



    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
</body>

</html>