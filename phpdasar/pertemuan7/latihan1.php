<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "irma",
    "nrp" => "043040022",
    "email" => "rma02062007@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "fandy.jpeg"
    ],
    [
        "nama" => "rara",
        "nrp" => "043040023",
        "email" => "rara@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "fandy.jpeg"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>