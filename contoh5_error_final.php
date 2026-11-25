<?php
// EKSPERIMEN ERROR (jangan digabung ke aplikasi utama)
// Hasil yang diharapkan: Fatal error: Cannot override final method BaseReport::getId()
class BaseReport {
    final public function getId(): string { return 'R-01'; }
    public function title(): string { return 'Report'; }
}

class CustomReport extends BaseReport {
    public function getId(): string { return 'X'; }   // melanggar final
}

echo (new CustomReport())->getId() . PHP_EOL;
