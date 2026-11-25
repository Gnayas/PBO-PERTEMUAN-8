<?php
// EKSPERIMEN ERROR (jangan digabung ke aplikasi utama)
// Hasil yang diharapkan: Fatal error: Declaration of CustomReport::title(): int
//                        must be compatible with BaseReport::title(): string
class BaseReport {
    final public function getId(): string { return 'R-01'; }
    public function title(): string { return 'Report'; }
}

class CustomReport extends BaseReport {
    public function title(): int { return 1; }        // return type tidak kompatibel
}

echo (new CustomReport())->title() . PHP_EOL;
