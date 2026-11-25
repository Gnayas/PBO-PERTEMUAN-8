<?php
declare(strict_types=1);
require_once __DIR__ . '/MahasiswaReguler.php';
require_once __DIR__ . '/StudentPresenter.php';

$m = new MahasiswaReguler('M01', 'Alya', 'Sains dan Teknologi', 'Teknik Informatika',
                          'SMAN 4 Sukabumi', 4, 'Band', 'Islam', 5000000);
$view = new StudentPresenter();

echo $view->showData($m->getNama()) . PHP_EOL;
echo $view->showData($m->getNim(), $m->getNama()) . PHP_EOL;
echo $m->hitungBiaya() . PHP_EOL;   // method nyata, bukan magic method
