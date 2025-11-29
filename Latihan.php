<?php
// BAGIAN 1: Load class Dugtrio
require_once "Dugtrio.php";
$dugtrio = new Dugtrio();
?>

<h2>Latihan Pokémon Dugtrio</h2>

<!-- BAGIAN 2: Form Latihan -->
<form method="POST">
    Jenis Latihan :
    <select name="jenis">
        <option value="Attack">Attack</option>
        <option value="Defense">Defense</option>
        <option value="Speed">Speed</option>
    </select><br><br>

    Intensitas :
    <input type="number" name="intensitas" required><br><br>

    <button type="submit">Latih Pokémon</button>
</form>

<?php
// BAGIAN 3: Eksekusi Latihan (setelah form dikirim)
if ($_POST) {
    $jenis = $_POST["jenis"];
    $intensitas = $_POST["intensitas"];

    $before = $dugtrio->train($jenis, $intensitas);
    $after  = $dugtrio->getInfo();

    // Siapkan data untuk riwayat
    $data = [
        "jenis" => $jenis,
        "intensitas" => $intensitas,
        "before_level" => $before["level"],
        "after_level"  => $after["level"],
        "before_hp"    => $before["hp"],
        "after_hp"     => $after["hp"],
        "waktu" => date("Y-m-d H:i:s")
    ];

    // Simpan ke file riwayat.json
    $riwayat = [];
    if (file_exists("riwayat.json")) {
        $riwayat = json_decode(file_get_contents("riwayat.json"), true);
    }
    $riwayat[] = $data;
    file_put_contents("riwayat.json", json_encode($riwayat));
?>
    
    <!-- TAMPILKAN HASIL LATIHAN -->
    <h3>Hasil Latihan Dugtrio</h3>
    Jenis Latihan : <?= $jenis ?><br>
    Level : <?= $before["level"] ?> → <?= $after["level"] ?><br>
    HP : <?= $before["hp"] ?> → <?= $after["hp"] ?><br><br>
    Jurus Spesial : <?= $dugtrio->specialMove() ?><br>

<?php } ?>

<br><br>
<a href="index.php">Kembali ke Beranda</a> |
<a href="riwayat.php">Riwayat Latihan</a>
