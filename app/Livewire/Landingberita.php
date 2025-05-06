<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Landingberita extends Component
{
    public function render()
    {
        return view('livewire.landingberita', [
            'blog' => Blog::where('category', 'berita')->latest()->take(3)->get()
        ]);
    }
}
