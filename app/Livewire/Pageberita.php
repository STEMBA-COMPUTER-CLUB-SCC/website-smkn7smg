<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Pageberita extends Component
{
  use WithPagination;

  public $contentBerita = [
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'SIJA'
    ],
    [
      'gambar' => '/assets/image/berita/purna.png',
      'tanggal' => 'Jumat, 28 Februari 2025',
      'judul' => 'Selamat Memasuki Purna Tugas Kepada Bapak Drs. Budi Santosa',
      'deskripsi' => 'Pensiun atau Purna Tugas adalah seseorang yang sudah tidak bekerja lagi karena usianya sudah lanjut...',
      'kategori' => 'STEMBA'
    ],
    [
      'gambar' => '/assets/image/berita/sosialisasi.png',
      'tanggal' => 'Rabu, 26 Februari 2025',
      'judul' => 'Sosialisasi Kelas Industri Pemrograman dari PT Telkom Indonesia dan PT Maleo Edukasi Teknologi Tahun 2025',
      'deskripsi' => 'Kelas industri pemrograman adalah program pembelajaran khusus di sekolah vokasi (SMK) yang bertujuan...',
      'kategori' => 'KGSP'
    ],
    [
      'gambar' => '/assets/image/berita/traspac.png',
      'tanggal' => 'Sabtu, 1 Maret 2025',
      'judul' => 'Siswa SIJA Berberita di Ajang Traspac Competition Tahun 2025',
      'deskripsi' => 'PT Traspac Makmur Sejahtera adalah salah satu perusahaan yang bergerak di bidang teknologi informasi...',
      'kategori' => 'TITL'
    ],
  ];

  public $perPage = 6;
  public $lastDirection = 'forward';
  public $search = '';
  public $selectedCategories = [];
  public $isMobile = false; 

  private function parseIndonesianDate($dateString)
  {
      $dateParts = explode(', ', $dateString);
      $dateWithoutDay = $dateParts[1];

      $months = [
          'Januari' => 'January',
          'Februari' => 'February',
          'Maret' => 'March',
          'April' => 'April',
          'Mei' => 'May',
          'Juni' => 'June',
          'Juli' => 'July',
          'Agustus' => 'August',
          'September' => 'September',
          'Oktober' => 'October',
          'November' => 'November',
          'Desember' => 'December',
      ];

      [$day, $month, $year] = explode(' ', $dateWithoutDay);
      $monthEnglish = $months[$month];
      $parsedDate = "$day $monthEnglish $year";

      return strtotime($parsedDate);
  }

  public function updatingSearch()
  {
      $this->resetPage();
  }

  public function toggleCategory($category)
  {
      if (in_array($category, $this->selectedCategories)) {
          $this->selectedCategories = array_diff($this->selectedCategories, [$category]);
      } else {
          $this->selectedCategories[] = $category;
      }
      $this->resetPage();
  }

  public function searchBerita()
  {
      $this->resetPage();   
  }

  public function setDeviceType($isMobile)
  {
      $this->isMobile = $isMobile;
      $this->perPage = $this->isMobile ? 3 : 6;
      $this->resetPage(); 
  }

  public function render()
  {
      $sortedBerita = collect($this->contentBerita)
          ->sortByDesc(function ($item) {
              return $this->parseIndonesianDate($item['tanggal']);
          })
          ->filter(function ($item) {
              $matchesSearch = empty($this->search) || stripos($item['judul'], $this->search) !== false;
              $matchesCategory = empty($this->selectedCategories) || in_array($item['kategori'], $this->selectedCategories);
              return $matchesSearch && $matchesCategory;
          })
          ->values();

      $total = $sortedBerita->count();
      $totalPages = (int) ceil($total / $this->perPage);
      $currentPage = $this->getPage();
      $paginatedBerita = $sortedBerita
          ->slice(($currentPage - 1) * $this->perPage, $this->perPage)
          ->values();

      $maxPagesToShow = 4;
      if ($totalPages <= $maxPagesToShow) {
          $startPage = 1;
          $endPage = $totalPages;
      } else {
          if ($this->lastDirection === 'forward') {
              $startPage = max(1, $currentPage - 2);
              $endPage = min($totalPages, $startPage + $maxPagesToShow - 1);
              if ($endPage - $startPage + 1 < $maxPagesToShow) {
                  $startPage = max(1, $endPage - $maxPagesToShow + 1);
              }
              if ($currentPage <= 2) {
                  $startPage = 1;
                  $endPage = $maxPagesToShow;
              }
          } else {
              $startPage = max(1, $currentPage - 1);
              $endPage = min($totalPages, $startPage + $maxPagesToShow - 1);
              if ($endPage - $startPage + 1 < $maxPagesToShow) {
                  $startPage = max(1, $endPage - $maxPagesToShow + 1);
              }
          }
      }

      return view('livewire.pageberita', [
          'paginatedBerita' => $paginatedBerita,
          'total' => $total,
          'currentPage' => $currentPage,
          'totalPages' => $totalPages,
          'startPage' => $startPage,
          'endPage' => $endPage,
          'selectedCategories' => $this->selectedCategories,
      ]);
  }

  public function nextPage()
  {
      $filteredBerita = collect($this->contentBerita)
          ->filter(function ($item) {
              $matchesSearch = empty($this->search) || stripos($item['judul'], $this->search) !== false;
              $matchesCategory = empty($this->selectedCategories) || in_array($item['kategori'], $this->selectedCategories);
              return $matchesSearch && $matchesCategory;
          })
          ->values();

      $totalPages = (int) ceil($filteredBerita->count() / $this->perPage);
      if ($this->getPage() < $totalPages) {
          $this->lastDirection = 'forward';
          $this->setPage($this->getPage() + 1);
      }
  }

  public function previousPage()
  {
      if ($this->getPage() > 1) {
          $this->lastDirection = 'backward';
          $this->setPage($this->getPage() - 1);
      }
  }

  public function gotoPage($page)
  {
      $filteredBerita = collect($this->contentBerita)
          ->filter(function ($item) {
              $matchesSearch = empty($this->search) || stripos($item['judul'], $this->search) !== false;
              $matchesCategory = empty($this->selectedCategories) || in_array($item['kategori'], $this->selectedCategories);
              return $matchesSearch && $matchesCategory;
          })
          ->values();

      $totalPages = (int) ceil($filteredBerita->count() / $this->perPage);
      if ($page >= 1 && $page <= $totalPages) {
          $this->setPage($page);
      }
  }
}