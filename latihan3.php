<?php

$www = [ [
    "nama" => " Virda Nuraini", 
    "kelas" => " X RPL 2", 
    "alamat" => "Jln. Budi Mulia",
    "nisn" => "0077283537",
    "no_wa" => "081646854768",
    "hobi" => "Denger music & Main Game",
    "cita_cita" => "Bisa ngoding (kelazzz) & ws ml"],

 ["nama" => "Xiao Adeptus", 
 "kelas" => " X RPL 1", 
 "alamat" => "Jln. Liyue",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "ngikutin Morax",
 "cita_cita" => "Ngelindungi Morax"],

 ["nama" => "Zhongli", 
 "kelas" => " XII RPL 2", 
 "alamat" => "Jln. Liyue",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "Nyantai",
 "cita_cita" => "Ingin bebas seperti naga"],

 ["nama" => "Tartaglia", 
 "kelas" => " XI RPL 1", 
 "alamat" => "Jln. Liyue",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "Minta duit",
 "cita_cita" => "Jadi kaya"],

 ["nama" => "Oktavia Ramadani", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln.Juan da",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "bikin gelang",
 "cita_cita" => "Ingin bersama dia"],

 ["nama" => "Akew Sugiono", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Karang Anyar",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "main epep",
 "cita_cita" => "top global epep"],

 ["nama" => "Akbir gim", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Mabes ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "berantem sm akew",
 "cita_cita" => "belum tentu"],

 ["nama" => "Raura Donita", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Boncang ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "main BL",
 "cita_cita" => "Orang kaya"],

 ["nama" => "Salma Aisyah", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Galur slur ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "baca buku",
 "cita_cita" => "mau jadi guru b.indo"],

 ["nama" => "Messi prtm", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Kober ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "gibah",
 "cita_cita" => "jadi desainer disney"]
 
];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Array</title>
 </head>
 <body>
    <h1> Peserta Didik SMK Jakarta Pusat 1 </h1>
    <table border = "1" cellpadding = "8">
        <tr>
            <td>Nama lengkap</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Nisn</td>
            <td>Nomor WhatsApp</td>
            <td>Hobi</td>
            <td>Cita-cita</td>
        </tr>
        <tr>
    <?php foreach($www as $data) : ?>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["nisn"]; ?></td>
            <td><?= $data["no_wa"]; ?></td>
            <td><?= $data["hobi"]; ?></td>
            <td><?= $data["cita_cita"]; ?></td>
        <tr/>
        <?php endforeach; ?>
        </table>
        <h2> Menyala abangkuh🔥🔥🔥</h2>
        <h2> Kelazzz abangkuh🔥🔥🔥</h2>
 </body>
 </html>