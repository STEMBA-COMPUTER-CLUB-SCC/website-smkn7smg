<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $showAllNavJurusan = false;
    public $onView = NULL;

    protected $listeners = [
        'update-on-view' => 'updateOnView',
    ];

    public function showNavJurusan()
    {
        if ($this->showAllNavJurusan) {
            $this->hideNavJurusan();
        } else {
            $this->showAllNavJurusan = true;
        }

        $this->view('jurusan');
    }

    public function showIconNavJurusan()
    {
        
    }

    public function hideNavJurusan()
    {
        $this->showAllNavJurusan = false;
    }

    public function view($page)
    {
        $this->onView = $page;

        switch ($this->onView) {
            case 'beranda':
                $this->hideNavJurusan();
                break;

            case 'tentang':
                $this->hideNavJurusan();
                break;

            case 'jurusan':
                break;

            case 'berita':
                $this->hideNavJurusan();
                break;

            case 'prestasi':
                $this->hideNavJurusan();
                break;

            default:
                $this->hideNavJurusan();
                $this->onView = 'beranda';
                break;
        }

        $this->dispatch('scroll-to-section', section: $this->onView);
    }

    public function updateOnView($page)
    {
        $this->view($page['page']);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}