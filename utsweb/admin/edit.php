
<?php 
    require 'index.php';

    // menangkap id dari url yang ditampilkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = $db->query 
    ("SELECT * FROM tiket");
    $i = 1;
    $row = mysqli_fetch_array($result);

    if(isset($_POST['kirim'])){
        $judulfilm = $_POST['judul'];
        $waktutayang = $_POST['waktutayang'];
        $hargatiket = $_POST['hargatiket'];
        $desc = $_POST['deskripsi'];
        $rate = $_POST['rate'];
        $tgl = $_POST['tanggal'];
        $gmbr = $_POST['gambar'];

        $result = mysqli_query($db,
        "UPDATE mahasiswa SET
            judul='$judulfilm',
            waktutayang='$waktutayang',
            hargatiket='$hargatike'
            deskripsi = '$desc'
            hargatiket = '$rate'
            tanggal = '$tgl'
            gambar = '$gmbr'
            WHERE id='$tiket'");

        if($result) {
            echo "
                <script>
                alert('Data Berhasil Diupdate');
                document.location.href = 'index.php';
                </script>
            ";

        } else {
                echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    </script>
                ";
            }
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1><a href="index.php">lihat data</a></h1>
    <form action="" method="post">

        <label for="">judul film : </label>
        <input type="text" name="nama" value=<?=$row['judul']?>><br><br>

        <label for="">waktutayang : </label>
        <input type="text" name="wakturayang" value=<?=$row['waktutayang']?>><br><br>

        <label for="">hargatiket : </label>
        <input type="text" name="hargatiket" value=<?=$row['hargatiket']?>><br><br>

        <label for="">deskripsi : </label>
        <input type="text" name="deskripsi" value=<?=$row['deskripsi']?>><br><br>

        <label for="">rate : </label>
        <input type="text" name="rate" value=<?=$row['rate']?>><br><br>

        <label for="">Tanggal</label>
        <input type="date" name="tanggal" ><br><br>

        <label for="">Upload Gambar </label>
        <input type="file" name="gambar" value=<?=$row['gambar']?>> <br><br>

        <input type="submit" name="kirim">
    </form>
</body>
</html>