<?php
class Pokemon {
    protected $name;
    protected $type;
    protected $level;
    protected $hp;

    public function __construct($name, $type, $level, $hp) {
        $this->name  = $name;
        $this->type  = $type;
        $this->level = $level;
        $this->hp    = $hp;
    }

    public function getInfo() {
        return [
            "name"  => $this->name,
            "type"  => $this->type,
            "level" => $this->level,
            "hp"    => $this->hp
        ];
    }

    public function train($jenis, $intensitas) {
        $before = ["level" => $this->level, "hp" => $this->hp];

        $this->level += 1;
        $this->hp += $intensitas * 2;

        return $before;
    }
}
?>
