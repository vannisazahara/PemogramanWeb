<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
    include "mysqli.php";
?>
<body>
    <table class="table table-bordered border-primary">
        <h1>Biodata</h1>
        
        <tr>
            <th>id</th>
            <th>npm</th>
            <th>nama</th>
            <th>prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM biodata";
        $result = $mysqli-> query($query);
        $id = 0;
        while ($row = $result->fetch_assoc()) {
        $id++

           ?> 
           <tr>
               <td><?php echo $id ?></td>
               <td><?php echo $row['npm']; ?></td>
               <td><?php echo $row['nama']; ?></td>
               <td><?php echo $row['prodi']; ?></td>
               <td>
               <a href= "<?= 'edit.php?id='.$row['id'];?>">Edit</a>
               <a href= "<?= 'hapus.php?id='.$row['id'];?>">Hapus</a>
               </td>
           </tr> 
           <?php   
        }
        ?>
    </table>
    <a href="form_tambah.php" type="button" class="btn btn-primary">Tambah Laporan Baru</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>