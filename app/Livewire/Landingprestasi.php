<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Landingprestasi extends Component
{
    public function render()
    {
        return view('livewire.landingprestasi', [
            'blog' => Blog::where('category', 'prestasi')->latest()->take(3)->get()
        ]);
    }
}
