<?php
require_once "Pokemon.php";

class Dugtrio extends Pokemon {

    public function __construct() {
        parent::__construct("Dugtrio", "Ground", 5, 60);
    }

    public function specialMove() {
        return "Earthquake – serangan gempa kuat yang mengguncang area sekitar.";
    }

    public function train($jenis, $intensitas) {
        $before = parent::train($jenis, $intensitas);

        if ($jenis == "Speed") {
            $this->hp += 3; // Dugtrio cepat
        } elseif ($jenis == "Attack") {
            $this->level += 1; // Lebih naik
        }

        return $before;
    }
}
?>
