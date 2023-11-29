<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TransactionExport implements FromCollection, WithMapping, WithHeadings
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
            'Nama Prasarana',
            'Nama Kegiatan',
            'Nomor Telepon',
            'Jadwal Kegiatan Berlangsung',
            'Jadwal Kegiatan Selesai',
            'Total Biaya',
            'Pesanan Dibuat',
        ];
    }
}
