<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportPendaftar implements FromCollection, WithHeadings, WithColumnWidths, WithMapping, WithStyles
{
    private $rowNumber = 0;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Registration::all();
    }

    public function headings(): array
    {
        return [
            'No.',
            'Tanggal Pendaftaran',
            'Status Pendaftaran',
            'Nama Usaha/Perusahaan',
            'Alamat Usaha',
            'Kelurahan ',
            'Kecamatan ',
            'Kab/Kota',
            'Provinsi ',
            'Kode Pos',
            'Skala Usaha',
            'Alamat Lokasi Produksi',
            'Status Usaha',
            'Email Usaha',
            'No Telephone/Whatsapp Usaha',
            'Nama Lengkap ',
            'Nomor KTP ',
            'Email Pribadi ',
            'No. Telp/Whatsapp ',
            'Penanggung Jawab ',
            'Jabatan  ',
            'KTP  ',
            'NIB ',
            'NPWP ',
            'Logo Usaha ',
        ];
    }

    public function map($pendaftar): array
    {
        $this->rowNumber++;
        return [
            $this->rowNumber,
            $pendaftar->tanggal_pendaftaran,
            $pendaftar->status_pendaftaran,
            $pendaftar->nama_usaha,
            $pendaftar->alamat_usaha,
            $pendaftar->kelurahan,
            $pendaftar->kecamatan,
            $pendaftar->kabupaten,
            $pendaftar->provinsi,
            $pendaftar->kode_pos,
            $pendaftar->skala_usaha,
            $pendaftar->lokasi_produksi,
            $pendaftar->status_usaha,
            $pendaftar->email_usaha,
            $pendaftar->no_hp_usaha,
            $pendaftar->nama_lengkap,
            $pendaftar->no_ktp,
            $pendaftar->email_pribadi,
            $pendaftar->no_hp,
            $pendaftar->penanggung_jawab,
            $pendaftar->jabatan,
            $pendaftar->ktp ? asset('storage/' . $pendaftar->ktp) : '',
            $pendaftar->nib ? asset('storage/' . $pendaftar->nib) : '',
            $pendaftar->npwp ? asset('storage/' . $pendaftar->npwp) : '',
            $pendaftar->logo_usaha ? asset('storage/' . $pendaftar->logo_usaha) : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $lastRow = $sheet->getHighestRow();
        $lastColumn = $sheet->getHighestColumn();

        $sheet->getStyle("A1:{$lastColumn}{$lastRow}")
            ->getAlignment()
            ->setHorizontal('center')
            ->setVertical('center');
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function columnWidths(): array
    {
        $columns = range('A', 'Z');
        $widths = [];

        foreach ($columns as $column) {
            $widths[$column] = 20;
        }

        return $widths;
    }
}
