<?php
$riwayat = [];
if (file_exists("riwayat.json")) {
    $riwayat = json_decode(file_get_contents("riwayat.json"), true);
}
?>

<h2>Riwayat Latihan Dugtrio</h2>

<?php foreach ($riwayat as $r): ?>
    <div style="margin-bottom:10px;">
        Jenis Latihan : <?= $r["jenis"] ?><br>
        Intensitas : <?= $r["intensitas"] ?><br>
        Level: <?= $r["before_level"] ?> → <?= $r["after_level"] ?><br>
        HP : <?= $r["before_hp"] ?> → <?= $r["after_hp"] ?><br>
        Waktu : <?= $r["waktu"] ?><br>
    </div>
    <hr>
<?php endforeach; ?>

<a href="index.php">Kembali</a>
