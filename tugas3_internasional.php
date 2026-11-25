<?php
declare(strict_types=1);
require_once __DIR__ . '/DataMahasiswa.php';
require_once __DIR__ . '/MahasiswaInternasional.php';

$_SESSION = [];                        // simulasi session untuk CLI (DataMahasiswa memakai $_SESSION)

$repo = new DataMahasiswa();           // class DataMahasiswa TIDAK diubah sama sekali
$repo->tambah(new MahasiswaReguler('M01', 'Alya', 'Sains dan Teknologi', 'Teknik Informatika',
                                   'SMAN 4 Sukabumi', 4, 'Band', 'Islam', 5000000));
$repo->tambah(new MahasiswaBeasiswa('M02', 'Bima', 'Sains dan Teknologi', 'Teknik Informatika',
                                    'SMAN 1 Sukabumi', 4, 'Futsal', 'Islam', 5000000, 40));
$repo->tambah(new MahasiswaInternasional('M03', 'Chen', 'Sains dan Teknologi', 'Teknik Informatika',
                                         'SMA Internasional', 2, 'Musik', 'Buddha', 5000000, 1500000));

foreach ($repo->semua() as $m) {
    printf('%s | %s | Rp%d%s', $m->ringkasan(), $m->getJenis(), $m->hitungBiaya(), PHP_EOL);
}
