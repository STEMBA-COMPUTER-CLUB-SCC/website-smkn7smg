<?php

namespace App\Livewire;

use Livewire\Component;

class Detailberita extends Component
{
    public $thumbnailUrls = [];
    public $activeIndex = 0;
    public $direction = 'forward'; 

    public function mount()
    {
        $this->thumbnailUrls = [
            "/assets/image/berita/band.png",
            "/assets/image/berita/traspac.png",
            "/assets/image/berita/sosialisasi.png",
            "/assets/image/berita/band2.png"
        ];
    }

    public function nextImage()
    {
        if (empty($this->thumbnailUrls)) return;

        $lastIndex = count($this->thumbnailUrls) - 1;

        if ($this->activeIndex < $lastIndex) {
            $this->activeIndex++;
        }

        if ($this->activeIndex === $lastIndex) {
            $this->direction = 'backward';
        } else {
            $this->direction = 'forward';
        }
    }

    public function prevImage()
    {
        if (empty($this->thumbnailUrls)) return;

        if ($this->activeIndex > 0) {
            $this->activeIndex--;
        }

        $lastIndex = count($this->thumbnailUrls) - 1;
        if ($this->activeIndex === 0) {
            $this->direction = 'forward';
        } else if ($this->activeIndex === $lastIndex) {
            $this->direction = 'backward';
        } else {
            $this->direction = 'forward'; 
        }
    }

    public function setActiveIndex($index)
    {
        $this->activeIndex = $index;
        $lastIndex = count($this->thumbnailUrls) - 1;
        if ($this->activeIndex === $lastIndex) {
            $this->direction = 'backward';
        } else {
            $this->direction = 'forward';
        }
    }

    public function render()
    {
        return view('livewire.detailberita');
    }
}