<?php

namespace App\Exports;

use App\Models\Tagihan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TagihansExport implements FromCollection, WithHeadings
{
    protected $bulan;

    public function __construct($bulan = null)
    {
        $this->bulan = $bulan;
    }

    public function collection()
    {
        $query = Tagihan::with(['warga', 'warga.rt', 'pembayarans']);

        if ($this->bulan) {
            $query->where('bulan', $this->bulan);
        }

        return $query->get()->map(function ($tagihan) {
            $jumlahTagihan = $tagihan->jumlah_tagihan;
            $totalPembayaran = $tagihan->pembayarans->sum('jumlah_dibayar');
            $belumTerbayar = max(0, $jumlahTagihan - $totalPembayaran);
            $status = ($totalPembayaran >= $jumlahTagihan) ? 'Lunas' : 'Belum Lunas';

            return [
                'No' => $tagihan->id,
                'Nama Warga' => $tagihan->warga->nama,
                'RT' => $tagihan->warga->rt->nama_rt,
                'Tagihan untuk Bulan' => date('F', mktime(0, 0, 0, $tagihan->bulan, 1)),
                'Tahun' => $tagihan->tahun,
                'Jumlah Tagihan' => $jumlahTagihan,
                'Total Terbayar' => $totalPembayaran,
                'Belum Terbayar' => $belumTerbayar,
                'Status' => $status,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Warga',
            'RT',
            'Tagihan untuk Bulan',
            'Tahun',
            'Jumlah Tagihan',
            'Total Terbayar',
            'Belum Terbayar',
            'Status'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true], 'fill' => ['fillType' => 'solid', 'startColor' => ['rgb' => 'ADD8E6']]],
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];
    }
}
