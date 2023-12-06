<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class TransactionExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Transaction::all();
    }

    public function map($transaction): array
    {
        return [
            $transaction->facility->title,
            $transaction->activity_name,
            // $transaction->user->name,
            // $transaction->guest_name,
            $transaction->phone_number,
            $transaction->schedule_start,
            $transaction->schedule_end,
            $transaction->amount,
            $transaction->created_at,
        ];
    }

    public function headings(): array
    {

        return [
            ['Daftar Riwayat Transaksi'],[
            'Nama Prasarana',
            'Nama Kegiatan',
            'Nomor Telepon',
            'Jadwal Kegiatan Berlangsung',
            'Jadwal Kegiatan Selesai',
            'Total Biaya',
            'Pesanan Dibuat',
            ]
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // Merge cells and set value for the custom heading
                $event->sheet->mergeCells('A1:G1');
                // Styling the heading row
                $event->sheet->getStyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 16,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => [
                            'argb' => 'FF0FFDDD',
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);
                $event->sheet->getStyle('A2:G2')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => [
                            'rgb' => 'D8E4BC', // Adjust the color as needed
                        ],
                    ],
                ]);
                $event->sheet->getDelegate()->getStyle('A2:G' . ($event->sheet->getDelegate()->getHighestRow()))
                ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

            },
        ];
    }
}
