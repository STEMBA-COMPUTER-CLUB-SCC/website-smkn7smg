<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class Pageprestasi extends Component
{
    use WithPagination;

    public $perPage = 6;
    public $lastDirection = 'forward';
    public $search = '';
    public $selectedCategories = [];
    public $isMobile = false;

    public $page = 1;
    protected $queryString = ['page'];

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

    public function searchPrestasi()
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
        $query = Blog::query()->where('category', 'prestasi')->latest();

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        if ($this->selectedCategories) {
            foreach ($this->selectedCategories as $category) {
                $query->whereJsonContains('tags', $category);
            }
        }

        $prestasi = $query->latest()->paginate($this->perPage)->withQueryString();

        $currentPage = $prestasi->currentPage();
        $lastPage = $prestasi->lastPage();
        $visiblePages = 5;
        $startPage = max(1, $currentPage - floor($visiblePages / 2));
        $endPage = min($lastPage, $startPage + $visiblePages - 1);

        if ($endPage - $startPage + 1 < $visiblePages) {
            $startPage = max(1, $endPage - $visiblePages + 1);
        }

        return view('livewire.pageprestasi', [
            'prestasi' => $prestasi,
            'currentPage' => $prestasi->currentPage(),
            'totalPages' => $lastPage,
            'startPage' => $startPage,
            'endPage' => $endPage,
            'total' => $prestasi->total(),
        ]);
    }

    public function goToDetail($id)
    {
        return redirect()->to('/prestasi/detail/' . $id);
    }

    public function nextPage()
    {
        $this->setPage($this->page + 1);
    }

    public function previousPage()
    {
        $this->setPage($this->page - 1);
    }

    public function gotoPage($page)
    {
        $this->setPage($page);
    }
}