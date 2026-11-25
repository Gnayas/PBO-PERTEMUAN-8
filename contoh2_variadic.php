<?php
declare(strict_types=1);

class Calculator {
    public function add(int ...$numbers): int {
        return array_sum($numbers);
    }
}

$calc = new Calculator();
echo $calc->add(10, 20) . PHP_EOL;      // 30
echo $calc->add(10, 20, 30) . PHP_EOL;  // 60

// ---- uji negatif (strict_types=1) ----
try {
    echo $calc->add(10, "20") . PHP_EOL;   // string bukan int
} catch (TypeError $e) {
    echo 'TypeError (add(10, "20")): ' . $e->getMessage() . PHP_EOL;
}

try {
    echo $calc->add(10.5) . PHP_EOL;       // float bukan int
} catch (TypeError $e) {
    echo 'TypeError (add(10.5)): ' . $e->getMessage() . PHP_EOL;
}

echo 'add() tanpa argumen = ' . $calc->add() . PHP_EOL;   // 0 (array kosong)
