<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    tambahlingkaran($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bangun ruang lingkaran</title>
</head>

<body>
    <h1>Bangun ruang lingkaran</h1>
    <br>

    <form action="" method="POST">

        <!-- Hidden input -->
        <input type="hidden" name="namabangun" value="Lingkaran">


        <ul>
            <li>
                <label for="jarijari">jari-jari </label>
                <input type="text" name="jarijari" id="jarijari">
            </li>

            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>

    <table>
        <tr>
            <td>Hasil :</td>
            <td>20</td>
        </tr>
    </table>
</body>

</html>