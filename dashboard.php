<?php

//* Panggil Datanya
$result = file_get_contents('history.json');
$result = json_decode($result, true);

//? Total perhitungan, Total perhitungan segitiga, Total perhitungan persegi, Total Perhitungan lingkaran, Luas Maksimum, Luas Minimum;


//* mencari data segitiga
$segitiga = 0;
foreach ($result as $row) {
    if ($row['namabangun'] == 'Segitiga') {
        $segitiga++;
    }
}

//* mencari data lingkaran
$lingkaran = 0;
foreach ($result as $row) {
    if ($row['namabangun'] == 'Lingkaran') {
        $lingkaran++;
    }
}

//* mencari data persegi
$persegi = 0;
foreach ($result as $row) {
    if ($row['namabangun'] == 'Persegi') {
        $persegi++;
    }
}



//* Luas Maksimum
foreach ($result as $row) {
    $row['hasil'];
}
$maximum = max($row);
$minimum = min($row);


//* untuk mencari persentase tiap bangun
$persenSegitiga = number_format($segitiga / count($result) * 100);
$persenPersegi = number_format($persegi / count($result) * 100);
$persenLingkaran = number_format($lingkaran / count($result) * 100);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>history data</h1>
    <br>

    <h2>Total perhitungan : <?= count($result); ?></h2>
    <br>
    <h2>Total perhitungan segitiga : <?= $segitiga; ?></h2>
    <br>
    <h2>Total Perhitungan Persegi : <?= $persegi; ?></h2>
    <br>
    <h2>Total Perhitungan Lingkaran : <?= $lingkaran; ?></h2>
    <br>
    <h2>Nilai Maximum luas bangun : <?= $maximum; ?></h2>
    <br>
    <h2>Nilai Minimum Luas bangun : <?= $minimum; ?></h2>

    <br><br><br><br><br>

    <h2>Persentasi segitiga : <?= $persenSegitiga; ?>%</h2>
    <br>
    <h2>Persentasi Persegi : <?= $persenPersegi; ?>%</h2>
    <br>
    <h2>Persentasi Lingkaran : <?= $persenLingkaran; ?>%</h2>


    <table align="center" width="80%" border="1" cellpadding="50" cellspacing="0">
        <?php
        //* mencari data berdasarkan tanggal

        foreach ($result as $row => $key) {
            $waktu[$row] = $key['create_at'];
        }
        array_multisort($waktu, SORT_DESC, $result);

        foreach ($result as $row) : ?>
            <tr>
                <td>
                    Waktu : <?= $row['create_at']; ?> <br>
                    Jenis Bangun Datar : <?= $row['namabangun']; ?> <br>
                    Luas Bangun Datar : <?= $row['hasil']; ?> <br>

                </td>
            </tr>



        <?php endforeach; ?>
    </table>
</body>

</html>