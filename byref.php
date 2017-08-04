<?php
class Holder {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}
function swap(&$x, &$y) {
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

$a = new Holder('a');
$b = new Holder('b');
swap($a, $b);

echo $a->getValue() . ", " . $b->getValue() . "\n";
?>