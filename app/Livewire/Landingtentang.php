<?php

namespace App\Livewire;

use Livewire\Component;

class Landingtentang extends Component
{
    public $playVideo = false;

    public function play()
    {
        $this->playVideo = true;
    }

    public function render()
    {
        return view('livewire.landingtentang');
    }
}

