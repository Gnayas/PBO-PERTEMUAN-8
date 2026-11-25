<?php
// Tugas 1 - Percobaan 2: variadic -> satu deklarasi saja
class Calculator2 {
    public function add(int ...$numbers): int { return array_sum($numbers); }
}
echo (new Calculator2())->add(1, 2, 3, 4) . PHP_EOL;   // 10
