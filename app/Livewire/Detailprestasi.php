<?php

namespace App\Livewire;

use Livewire\Component;

class Detailprestasi extends Component
{
    public $thumbnailUrls = [];
    public $activeIndex = 0;
    public $direction = 'forward'; 

    public function mount()
    {
        $this->thumbnailUrls = [
            "/assets/image/prestasi/band.png",
            "/assets/image/prestasi/traspac.png",
            "/assets/image/prestasi/cj.png",
            "/assets/image/prestasi/band.png",
            "/assets/image/prestasi/band.png",
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
        return view('livewire.detailprestasi');
    }
}