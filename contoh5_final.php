<?php
class BaseReport {
    final public function getId(): string { return 'R-01'; }
    public function title(): string { return 'Report'; }
}

class CustomReport extends BaseReport {
    public function title(): string { return 'Custom Report'; }
    // getId() sengaja tidak dideklarasikan ulang karena final di parent.
}

$r = new CustomReport();
echo $r->getId() . ' - ' . $r->title() . PHP_EOL;
