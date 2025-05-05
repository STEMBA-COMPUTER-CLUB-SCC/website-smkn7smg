<?php
namespace App\Livewire;

use Livewire\Component;

class Pagejurusan extends Component
{
    public string $key;
    public array $jurusan;

    public function mount($key)
    {
        $this->key = $key;

        $data = [
            'sija' => [
                'logo' => '/assets/image/jurusan/logo/pplg.png',
                'doc' => '/assets/image/jurusan/documentations/pplg.png',
                'singkat' => 'SIJA',
                'nama' => 'SISTEM INFORMASI JARINGAN DAN APLIKASI',
                'deskripsi' => 'Jurusan yang berfokus pada pembuatan perangkat lunak dan pengembangan gim berbasis komputer maupun mobile.',
                'program' => '4 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [   
                        'icon' => '/assets/image/jurusan/icon/pplg1.png',
                        'judul' => 'Desain Grafis',
                        'deskripsi' => 'Pembuatan aset digital 2D/3D menggunakan Illustrator dan Blender',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/pplg2.png',
                        'judul' => 'Pemrograman',
                        'deskripsi' => 'Dasar-dasar coding dan pengembangan aplikasi web dan mobile',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/pplg3.png',
                        'judul' => 'Sistem Jaringan',
                        'deskripsi' => 'Konsep jaringan komputer dan konfigurasi dasar jaringan.',
                    ],
                ],
            ],
            'kjij' => [
                'logo' => '/assets/image/jurusan/logo/kpbs.png',
                'doc' => '/assets/image/jurusan/documentations/kpbs.png',
                'singkat' => 'KJIJ',
                'nama' => 'KONSTRUKSI JALAN IRIGASI DAN JEMBATAN',
                'deskripsi' => 'Jurusan ini berfokus pada pembangunan infrastruktur sipil seperti jalan, jembatan, dan gedung bertingkat.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/kjij1.png',
                        'judul' => 'Jalan',
                        'deskripsi' => 'Perhitungan RAB, ukur dan olah data tanah untuk pembuatan peta situasi.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/kjij2.png',
                        'judul' => 'Irigasi',
                        'deskripsi' => 'Perhitungan RAB dan merancang desain saluran irigasi sesuai kondisi sungai.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/kjij3.png',
                        'judul' => 'Jembatan',
                        'deskripsi' => 'Desain dan analisa pembangunan jembatan, serta perhitungan LHR.',
                    ],
                ],
            ],
            'kgs' => [
                'logo' => '/assets/image/jurusan/logo/tkp.png',
                'doc' => '/assets/image/jurusan/documentations/tkp.png',
                'singkat' => 'KGS',
                'nama' => 'KONSTRUKSI GEDUNG DAN SANITASI',
                'deskripsi' => 'Jurusan ini mempelajari teknik perencanaan, pembangunan, dan perawatan bangunan perumahan serta fasilitas umum.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/kgs1.png',
                        'judul' => 'Estimasi Biaya Konstruksi',
                        'deskripsi' => 'Menghitung dan menyusun anggaran biaya pembangunan gedung secara rinci.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/kgs2.png',
                        'judul' => 'Sistem Utilitas Bangunan',
                        'deskripsi' => 'Memahami sistem pendukung dalam bangunan agar berfungsi optimal.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/kgs3.png',
                        'judul' => 'Konstruksi Bangunan Gedung',
                        'deskripsi' => 'Memahami struktur bangunan gedung dan menghitung pembebanannya.',
                    ],
                ],
            ],
            'tflm' => [
                'logo' => '/assets/image/jurusan/logo/tpfl.png',
                'doc' => '/assets/image/jurusan/documentations/tpfl.png',
                'singkat' => 'TFLM',
                'nama' => 'TEKNIK FABRIKASI LOGAM DAN MANUFAKTUR',
                'deskripsi' => 'Jurusan ini mengajarkan keterampilan dalam teknik pengelasan dan fabrikasi logam untuk industri.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/tflm1.png',
                        'judul' => 'Mesin Bubut dan Frais Manual',
                        'deskripsi' => 'Pembuatan, perbaikan, dan modifikasi komponen mekanik.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tflm2.png',
                        'judul' => 'Pemrograman Mesin CNC',
                        'deskripsi' => 'Pembuatan dan simulasi program CNC menggunakan CAD/CAM.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tflm3.png',
                        'judul' => 'pembentukan dan Penyatuan Logam',
                        'deskripsi' => 'Pengelasan, molding, casting, dan forging dalam proses manufaktur.',
                    ],
                ],
            ],
            'tkr' => [
                'logo' => '/assets/image/jurusan/logo/to.png',
                'doc' => '/assets/image/jurusan/documentations/to.png',
                'singkat' => 'TKR',
                'nama' => 'TEKNIK KENDARAAN RINGAN',
                'deskripsi' => 'Jurusan ini mengajarkan tentang sistem dan teknologi kendaraan bermotor, termasuk perbaikan dan perawatan mesin.',
                'program' => '3 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/to1.png',
                        'judul' => 'Sistem Mesin',
                        'deskripsi' => 'Mempelajari sistem pengapian, pengisian, dan pendinginan.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/to2.png',
                        'judul' => 'Chasis',
                        'deskripsi' => 'Komponen rangka, sistem kemudi, suspensi, dan rem kendaraan ringan.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/to3.png',
                        'judul' => 'Kelistrikan Mobil',
                        'deskripsi' => 'Memahami sistem kelistrikan mobil, mulai dari lampu hingga kontrol elektronik.',
                    ],
                ],
            ],
            'tek' => [
                'logo' => '/assets/image/jurusan/logo/tek.png',
                'doc' => '/assets/image/jurusan/documentations/tek.png',
                'singkat' => 'TEK',
                'nama' => 'TEKNIK ELEKTRONIKA KOMUNIKASI',
                'deskripsi' => 'Mempelajari sistem komunikasi elektronik, termasuk perangkat telekomunikasi, jaringan komputer, dan teknologi transmisi data.',
                'program' => '3 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/tek1.png',
                        'judul' => 'Handphone',
                        'deskripsi' => 'Mempelajari seri, tipe, sistem operasi, dan serial number HP Samsung.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tek2.png',
                        'judul' => 'Elektronika',
                        'deskripsi' => 'Mengenal komponen PCB, pemahaman solar cell, serta peralatan elektronik.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tek3.png',
                        'judul' => 'Jaringan',
                        'deskripsi' => 'Mempelajari dasar-dasar komunikasi jaringan.',
                    ],
                ],
            ],
            'tme' => [
                'logo' => '/assets/image/jurusan/logo/tme.png',
                'doc' => '/assets/image/jurusan/documentations/tme.png',
                'singkat' => 'TME',
                'nama' => 'TEKNIK MEKATRONIKA',
                'deskripsi' => 'Menggabungkan teknik mekanika, elektronika, dan informatika dalam sistem kendali otomatis.',
                'program' => '3 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/tme1.png',
                        'judul' => 'Industrial',
                        'deskripsi' => 'Komponen listrik, mikrokontroler, desain PCB, kontrol industri, sistem pneumatik-hidrolik, dan simulasi produksi.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tme2.png',
                        'judul' => 'Pemrograman',
                        'deskripsi' => 'Pemrograman C++ dan pembuatan program kontrol industri menggunakan ladder diagram.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/tme3.png',
                        'judul' => 'Mechanical',
                        'deskripsi' => 'Proses manufaktur dengan mesin, desain CAD, otomatisasi dengan CAM, serta analisis dan optimasi desain melalui CAE.',
                    ],
                ],
            ],
            'titl' => [
                'logo' => '/assets/image/jurusan/logo/tk.png',
                'doc' => '/assets/image/jurusan/documentations/tk.png',
                'singkat' => 'TITL',
                'nama' => 'TEKNIK INSTALASI TENAGA LISTRIK',
                'deskripsi' => 'Jurusan ini mengajarkan instalasi, perawatan, dan perbaikan sistem kelistrikan.',
                'program' => '3 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'icon' => '/assets/image/jurusan/icon/titl1.png',
                        'judul' => 'Instalasi',
                        'deskripsi' => 'Instalasi listrik untuk penerangan, motor listrik, serta distribusi daya listrik.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/titl2.png',
                        'judul' => 'Pendingin',
                        'deskripsi' => 'Mengenal prinsip kerja dan instalasi sistem pendingin, serta perawatannya.',
                    ],
                    [
                        'icon' => '/assets/image/jurusan/icon/titl3.png',
                        'judul' => 'Pneumatic',
                        'deskripsi' => 'Mempelajari sistem penggerak berbasis tekanan udara.',
                    ],
                ],
            ],
        ];

        $this->jurusan = $data[$this->key] ?? abort(404);
    }

    public function render()
    {
        return view('livewire.pagejurusan')
            ->layout('jurusan.jurusan');
    }
}