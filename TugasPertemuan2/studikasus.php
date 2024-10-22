<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form method="post">
        <h3>Masukkan Nilai Mata Kuliah 1:</h3>
        <input type="number" name="nilai1"></br>

        <h3>Masukkan Nilai Mata Kuliah 2:</h3>
        <input type="number" name="nilai2"></br>
       
       <h3>Masukkan Nilai Mata Kuliah 3:</h3>
       <input type="number" name="nilai3"></br>
       </br>
       
       <input type="submit" name="submit" value="Submit"></br>
    </form>

    <?php
        if (isset($_POST['submit'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        $RataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

       if($RataRata >=60){
        $statusKelulusan = "Lulus";
       }else{
        $statusKelulusan = "Tidak Lulus";
       }
       
        echo "<h3>Nilai Rata-Rata: $RataRata </h3>";
        echo "<h3>Status Kelulusan: $statusKelulusan</h3>";
    }
    ?>
</body>
</html>