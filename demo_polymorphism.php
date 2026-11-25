<?php
declare(strict_types=1);
require_once __DIR__ . '/MahasiswaReguler.php';
require_once __DIR__ . '/MahasiswaBeasiswa.php';

$daftar = [
    new MahasiswaReguler('M01', 'Alya', 'Sains dan Teknologi', 'Teknik Informatika',
                         'SMAN 4 Sukabumi', 4, 'Band', 'Islam', 5000000),
    new MahasiswaBeasiswa('M02', 'Bima', 'Sains dan Teknologi', 'Teknik Informatika',
                          'SMAN 1 Sukabumi', 4, 'Futsal', 'Islam', 5000000, 40),
];

foreach ($daftar as $m) {
    printf('%s | Rp%d%s', $m->ringkasan(), $m->hitungBiaya(), PHP_EOL);
}
