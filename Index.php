<?php
require_once "Dugtrio.php";
$dugtrio = new Dugtrio();
$info = $dugtrio->getInfo();
?>

<h2>Pokémon Kamu</h2>
Nama : <?= $info["name"] ?> <br>
Tipe : <?= $info["type"] ?> <br>
Level Awal : <?= $info["level"] ?> <br>
HP Awal : <?= $info["hp"] ?> <br>
Jurus Spesial : <?= $dugtrio->specialMove() ?> <br><br>

<a href="latihan.php">Mulai Latihan</a> |
<a href="riwayat.php">Riwayat Latihan</a>
