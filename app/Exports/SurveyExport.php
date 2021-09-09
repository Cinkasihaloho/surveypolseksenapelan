<?php

namespace App\Exports;

use App\Models\Survey;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveyExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$survey = Survey::all();
        return $survey;
    }

    public function headings(): array
    {
        return [
            'No.',
            'Menurut Bapak/Ibu/Saudara bagaimana prosedur/tata cara pelayanan, termasuk pengaduan di Polsek Rumbai ?',
            'Menurut Bapak/Ibu/Saudara, bagaimana hasil pelayanan yang diberikan dan diterima sesuai dengan ketentuan yang telah ditetapkan di Polsek Rumbai ?',
            'Menurut Bapak/Ibu/saudara, bagaimana kemampuan (pengetahuan, keahlian, keterampilan, dan pengalaman) para pegawai/petugas di Polsek Rumbai ?',
            'Bagaimana sikap petugas/pegawai di Polsek Rumbai dalam memberikan pelayanan?',
            'Menurut Bapak/Ibu/saudara, bagaimana pertanyaan kesanggupan dan kewajiban dari para petugas/pegawai di PN Palangka Raya dalam memberikan pelayanan sesuai dengan standar pelayanan ?',
            'Menurut Bapak/Ibu/Saudara, bagaimana penanganan pengaduan, saran dan masukan, serta tindak lanjutnya di Polsek Rumbai ?',
            'Tanggal masuk',
            'Tanggal update'
        ];
    }

}
