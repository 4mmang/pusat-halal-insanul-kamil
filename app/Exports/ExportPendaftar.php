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

            'Produk',
            'Bahan/Merek',
            'Alamat Outlet',
            'Kemasan',
            'Cleaning Agent',
            'Denah ',
            'Area Pemasaran ',
            'Jenis Produk ',

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

            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat Domisili',

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

            asset('storage/' . $pendaftar->pdf_nama_nama_produk),
            asset('storage/' . $pendaftar->pdf_nama_nama_bahan_merek),
            $pendaftar->alamat_outlet,
            $pendaftar->kemasan,
            $pendaftar->cleaning_agent,
            asset('storage/' . $pendaftar->denah),
            $pendaftar->area_pemasaran,
            $pendaftar->jenis_produk,

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

            $pendaftar->tempat_lahir,
            $pendaftar->tanggal_lahir,
            $pendaftar->alamat_domisili,

            "'" . (string) $pendaftar->no_ktp,
            $pendaftar->email_pribadi,
            "'" . (string) $pendaftar->no_hp,
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
        // $columns = range('A', 'Z');
        $columns = [];

        foreach (range('A', 'Z') as $first) {
            $columns[] = $first; // A - Z
        }

        foreach (range('A', 'Z') as $first) {
            foreach (range('A', 'Z') as $second) {
                $columns[] = $first . $second; // AA - AZ
            }
        }
        $widths = [];

        foreach ($columns as $column) {
            $widths[$column] = 30;
        }

        return $widths;
    }
}
