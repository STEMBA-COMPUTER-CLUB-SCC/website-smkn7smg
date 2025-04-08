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
            'pplg' => [
                'logo' => '/assets/image/jurusan/logo/pplg.png',
                'doc' => '/assets/image/jurusan/documentations/pplg.png',
                'singkat' => 'PPLG',
                'nama' => 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM',
                'deskripsi' => 'Jurusan yang berfokus pada pembuatan perangkat lunak dan pengembangan gim berbasis komputer maupun mobile.',
                'program' => '4 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'DESAIN GRAFIS',
                        'deskripsi' => 'Pembuatan aset digital 2D/3D menggunakan Illustrator dan Blender',
                    ],
                    [
                        'judul' => 'PEMROGRAMAN',
                        'deskripsi' => 'Dasar-dasar coding dan pengembangan aplikasi web dan mobile',
                    ],
                    [
                        'judul' => 'JARINGAN',
                        'deskripsi' => 'Konsep jaringan komputer dan konfigurasi dasar jaringan.',
                    ],
                ],
            ],
            'kpbs' => [
                'logo' => '/assets/image/jurusan/logo/kpbs.png',
                'doc' => '/assets/image/jurusan/documentations/kpbs.png',
                'singkat' => 'KPBS',
                'nama' => 'KONSTRUKSI DAN PERAWATAN BANGUNAN SIPIL',
                'deskripsi' => 'Jurusan ini berfokus pada pembangunan infrastruktur sipil seperti jalan, jembatan, dan gedung bertingkat.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
                    ],
                ],
            ],
            'tkp' => [
                'logo' => '/assets/image/jurusan/logo/tkp.png',
                'doc' => '/assets/image/jurusan/documentations/tkp.png',
                'singkat' => 'TKP',
                'nama' => 'TEKNIK KONSTRUKSI DAN PERAWATAN',
                'deskripsi' => 'Jurusan ini mempelajari teknik perencanaan, pembangunan, dan perawatan bangunan perumahan serta fasilitas umum.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
                    ],
                ],
            ],
            'tpfl' => [
                'logo' => '/assets/image/jurusan/logo/tpfl.png',
                'doc' => '/assets/image/jurusan/documentations/tpfl.png',
                'singkat' => 'TPFL',
                'nama' => 'TEKNIK PENGELASAN DAN FABRIKASI LOGAM',
                'deskripsi' => 'Mengajarkan keterampilan dalam teknik pengelasan dan fabrikasi logam untuk industri manufaktur, otomotif, dan konstruksi.',
                'program' => '4 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
                    ],
                ],
            ],
            'to' => [
                'logo' => '/assets/image/jurusan/logo/to.png',
                'doc' => '/assets/image/jurusan/documentations/to.png',
                'singkat' => 'TO',
                'nama' => 'TEKNIK OTOMOTIF',
                'deskripsi' => 'Jurusan ini mengajarkan tentang sistem dan teknologi kendaraan bermotor, termasuk perbaikan dan perawatan mesin, sistem kelistrikan kendaraan, serta teknologi kendaraan listrik.',
                'program' => '3 Tahun',
                'kelas' => '3 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
                    ],
                ],
            ],
            'te' => [
                'logo' => '/assets/image/jurusan/logo/te.png',
                'doc' => '/assets/image/jurusan/documentations/te.png',
                'singkat' => 'TE',
                'nama' => 'TEKNIK ELEKTRONIKA',
                'deskripsi' => 'Jurusan ini akan mempelajari cara merancang, merakit, serta memelihara perangkat elektronik yang digunakan dalam sistem komunikasi, jaringan, dan industri manufaktur.',
                'program' => '3 Tahun',
                'kelas' => '6 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
                    ],
                ],
            ],
            'tk' => [
                'logo' => '/assets/image/jurusan/logo/tk.png',
                'doc' => '/assets/image/jurusan/documentations/tk.png',
                'singkat' => 'TK',
                'nama' => 'TEKNIK KETENAGALISTRIKAN',
                'deskripsi' => 'Jurusan ini mengajarkan instalasi, perawatan, dan perbaikan sistem kelistrikan baik untuk rumah tangga, industri, maupun pembangkit listrik.',
                'program' => '3 Tahun',
                'kelas' => '2 Indeks',
                'kompetensi' => [
                    [
                        'judul' => 'TRANSMISI',
                        'deskripsi' => 'Teknologi dan praktik jaringan transmisi data modern',
                    ],
                    [
                        'judul' => 'LAYANAN KOMUNIKASI',
                        'deskripsi' => 'Teknik membangun dan mengelola layanan komunikasi seperti VoIP dan IPTV',
                    ],
                    [
                        'judul' => 'TELEKOMUNIKASI DASAR',
                        'deskripsi' => 'Dasar-dasar sistem telekomunikasi dan konversi sinyal',
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