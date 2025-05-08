<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Detailprestasi extends Component
{
  public $thumbnailUrls = [];
  public $activeIndex = 0;
  public $direction = 'forward';
  public $blog;

  public function mount($id)
  {
    $blog = Blog::findOrFail($id);
    $this->blog = $blog;
    $this->thumbnailUrls = collect($blog->image)->map(function ($filename) {
      return asset('storage/' . $filename);
    })->toArray();
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

  public function goToPage($id)
  {
    return redirect()->to('/prestasi/detail/' . $id);
  }

  public function render()
  {
    return view('livewire.detailprestasi', [
      'blog' => $this->blog,
      'latestNews' => Blog::where('id', '!=', $this->blog->id)
        ->where('category', 'prestasi')
        ->latest()
        ->take(3)
        ->get(),
      'thumbnailUrls' => $this->thumbnailUrls,
      'activeIndex' => $this->activeIndex,
      'direction' => $this->direction
    ]);
  }
}
