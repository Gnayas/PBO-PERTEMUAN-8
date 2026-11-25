<?php
declare(strict_types=1);
require_once __DIR__ . '/Mahasiswa.php';

final class MahasiswaInternasional extends Mahasiswa {
    private int $ukt;
    private int $biayaLayanan;   // biaya tambahan khusus mahasiswa internasional

    public function __construct(string $nim, string $nama, string $fakultas, string $prodi,
                                string $asalSekolah, int $semester, string $hobi, string $agama,
                                int $ukt, int $biayaLayanan) {
        parent::__construct($nim, $nama, $fakultas, $prodi, $asalSekolah, $semester, $hobi, $agama);
        $this->setUkt($ukt);
        $this->setBiayaLayanan($biayaLayanan);
    }

    public function getUkt(): int { return $this->ukt; }
    public function getBiayaLayanan(): int { return $this->biayaLayanan; }

    public function setUkt(int $ukt): void {
        if ($ukt < 0) throw new InvalidArgumentException('UKT tidak boleh negatif');
        $this->ukt = $ukt;
    }
    public function setBiayaLayanan(int $b): void {
        if ($b < 0) throw new InvalidArgumentException('Biaya layanan tidak boleh negatif');
        $this->biayaLayanan = $b;
    }

    public function hitungBiaya(): int { return $this->ukt + $this->biayaLayanan; }
    public function getJenis(): string { return 'Internasional'; }

    public function ringkasan(): string {
        return parent::ringkasan() . ' [Internasional]';
    }
}
