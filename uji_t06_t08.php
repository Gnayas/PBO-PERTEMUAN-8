<?php
declare(strict_types=1);
require_once __DIR__ . '/MahasiswaReguler.php';
require_once __DIR__ . '/MahasiswaBeasiswa.php';

$reg = new MahasiswaReguler('M01', 'Alya', 'Sains dan Teknologi', 'Teknik Informatika',
                            'SMAN 4 Sukabumi', 4, 'Band', 'Islam', 5000000);
echo 'T06: ' . $reg->hitungBiaya() . PHP_EOL;

$bea = new MahasiswaBeasiswa('M02', 'Bima', 'Sains dan Teknologi', 'Teknik Informatika',
                             'SMAN 1 Sukabumi', 4, 'Futsal', 'Islam', 5000000, 40);
echo 'T07: ' . $bea->hitungBiaya() . PHP_EOL;

foreach ([-1, 101] as $d) {
    try {
        new MahasiswaBeasiswa('M03', 'Cici', 'Sains dan Teknologi', 'Teknik Informatika',
                              'SMAN 2 Sukabumi', 4, 'Renang', 'Islam', 5000000, $d);
    } catch (InvalidArgumentException $e) {
        echo "T08 (diskon $d): " . get_class($e) . ' - ' . $e->getMessage() . PHP_EOL;
    }
}
