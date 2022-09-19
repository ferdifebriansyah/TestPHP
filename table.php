<?php

if(!$_POST)

$siswa = [
    [
        "id"   => "1",
        "foto" => "ferdi1.jpeg",
        "nama" => "Ach Satria"
    ],
    [
        "foto" => "ferdi2.jpeg",
        "nama" => "Kinnaras"
    ],
    [
        "foto" => "ferdi3.jpeg",
        "nama" => "Bagas AP"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Data Siswa (siswa)</h1>
</head>
<body>
    <table border = "1" cellspacing = "1" cellspadding = "10" width="40%">
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>

        <?php foreach ($siswa as $id => $value): ?> 
        <tr align = "center">
            <td><?=$id + 1?></td>
            <td><img src="<?=$value["foto"]?>" alt="" width="100px" height="100px"></td>
            <td><?=$value["nama"] ?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>