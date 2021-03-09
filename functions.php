<?php

//* atur waktu timezone untuk dimasukan ke data
date_default_timezone_set('Asia/Makassar');
$waktu = date("F j, Y, g:i a");

//* Koneksi
function koneksi()
{
    $koneksi = file_get_contents('history.json');
    $koneksi = json_decode($koneksi, true);

    return $koneksi;
}

//*Fungsi untuk querydata
function panggildata($row)
{
    //*Panggil data json
    $result = file_get_contents('history.json');

    //*Merubah ke array assosiatif
    $result = json_decode($result, true);

    //* melakukan penampungan;
    $result[] = $row;

    $result = json_encode($result, JSON_PRETTY_PRINT);
    file_put_contents('history.json', $result);

    return $result;
}

//* Fungsi proses bangun segitiga
function tambahSegitiga($data)
{
    global $waktu;

    $alas = $data['alas'];
    $tinggi = $data['tinggi'];
    $namabangun = $data['namabangun'];

    $hasiljumlah = $alas * $tinggi / 2;

    //? check apakah data berhasil di jumlahkan;
    if ($hasiljumlah) {
        $check = 1;
    } else {
        $check = 0;
    }


    //! perlu id yang awalannya itu nama bangun nya, disampingnnya angka yang berurutan setiap nambah data.

    //? nama bangun, alas, tinggi, hasil, waktu

    panggildata(['namabangun' => $namabangun, 'alas' => $alas, 'tinggi' => $tinggi, 'hasil' => $hasiljumlah, 'create_at' => $waktu]);

    //? gimana caranya mengembalikan data ketika berhasil di proses

    return $check;
}

//* Fungsi proses bangun lingkaran
function tambahlingkaran($data)
{

    global $waktu;

    $jarijari = $data['jarijari'];
    $namabangun = $data['namabangun'];

    $hasiljumlah = $jarijari * 3.14 * $jarijari;

    panggildata(['namabangun' => $namabangun, 'jarijari' => $jarijari, 'hasil' => $hasiljumlah, 'create_at' => $waktu]);
}

//* Fungsi proses bangun Persegi
function tambahPersegi($data)
{

    global $waktu;

    $sisi = $data['sisi'];
    $namabangun = $data['namabangun'];

    $hasiljumlah = $sisi * $sisi;

    panggildata(['namabangun' => $namabangun, 'sisi' => $sisi, 'hasil' => $hasiljumlah, 'create_at' => $waktu]);
}
