<?php
// Tugas 1 - Percobaan 1: mencoba "overload" di PHP -> ERROR
// Hasil yang diharapkan: Fatal error: Cannot redeclare Calculator::add()
class Calculator {
    public function add(int $a, int $b): int { return $a + $b; }
    public function add(int $a, int $b, int $c): int { return $a + $b + $c; }
}
