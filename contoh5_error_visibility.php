<?php
// EKSPERIMEN ERROR (jangan digabung ke aplikasi utama)
// Hasil yang diharapkan: Fatal error: Access level to CustomReport::title()
//                        must be public (as in class BaseReport)
class BaseReport {
    final public function getId(): string { return 'R-01'; }
    public function title(): string { return 'Report'; }
}

class CustomReport extends BaseReport {
    private function title(): string { return 'X'; }  // visibility lebih ketat
}

echo (new CustomReport())->getId() . PHP_EOL;
