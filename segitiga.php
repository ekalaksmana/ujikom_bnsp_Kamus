<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambahsegitiga($_POST) > 0) {
        echo "
            <script>
                alert('Proses Perhitungan Berhasil!');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Proses Perhitungan Gagal!');
            </script>
        ";
    }

    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil = $alas * $tinggi / 2;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bangun ruang segitiga</title>
</head>

<body>
    <h1>Bangun ruang segitiga</h1>
    <br>

    <form action="" method="POST">

        <!-- Hidden input -->
        <input type="hidden" name="namabangun" value="Segitiga">


        <ul>
            <li>
                <label for="alas">alas </label>
                <input type="text" name="alas" id="alas" required>
            </li>

            <li>
                <label for="tinggi">tinggi </label>
                <input type="text" name="tinggi" id="tinggi" required>
            </li>

            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>

    <table>
        <tr>
            <td>Hasil :</td>
            <td><?= $hasil; ?></td>
        </tr>
    </table>
</body>

</html>