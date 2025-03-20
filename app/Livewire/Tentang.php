<?php

namespace App\Livewire;

use Livewire\Component;

class Tentang extends Component
{
    public $playVideo = false;

    public function play()
    {
        $this->playVideo = true;
    }

    public function render()
    {
        return view('livewire.tentang');
    }
}

