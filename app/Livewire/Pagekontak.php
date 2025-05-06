<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Pagekontak extends Component
{
    public $countries = [];
    public $filteredCountries = [];
    public $selectedCountryCode = '+62'; 
    public $selectedFlag = '/assets/icon/indonesia.png'; 
    public $phoneNumber = '';
    public $fullPhoneNumber = '';
    public $isDropdownOpen = false;
    public $search = '';

    public function mount()
    {
        $response = Http::get('https://restcountries.com/v3.1/all?fields=name,flags,idd');
        $countries = $response->json();

        $this->countries = collect($countries)->map(function ($country) {
            $code = $country['idd']['root'] . ($country['idd']['suffixes'][0] ?? '');
            return [
                'name' => $country['name']['common'],
                'flag' => $country['flags']['png'],
                'code' => $code,
            ];
        })->sortBy('name')->values()->toArray();

        $this->filteredCountries = $this->countries;

        $indonesia = collect($this->countries)->firstWhere('code', '+62');
        if ($indonesia) {
            $this->selectedCountryCode = $indonesia['code'];
            $this->selectedFlag = $indonesia['flag'];
            $this->updateFullPhoneNumber();
        }
    }

    public function searchCountries()
    {
        if (empty($this->search)) {
            $this->filteredCountries = $this->countries;
        } else {
            $this->filteredCountries = collect($this->countries)
                ->filter(function ($country) {
                    return stripos($country['name'], $this->search) !== false;
                })
                ->values()
                ->toArray();
        }
    }

    public function toggleDropdown()
    {
        $this->isDropdownOpen = !$this->isDropdownOpen;
        if ($this->isDropdownOpen) {
            $this->search = '';
            $this->filteredCountries = $this->countries;
        }
    }

    public function selectCountry($code)
    {
        $country = collect($this->countries)->firstWhere('code', $code);
        if ($country) {
            $this->selectedCountryCode = $country['code'];
            $this->selectedFlag = $country['flag'];
            $this->isDropdownOpen = false;
            $this->search = ''; 
            $this->filteredCountries = $this->countries;
            $this->updateFullPhoneNumber();
        }
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'phoneNumber' || $propertyName === 'selectedCountryCode') {
            $this->updateFullPhoneNumber();
        }
    }

    public function updateFullPhoneNumber()
    {
        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $this->phoneNumber);
        $this->fullPhoneNumber = $this->selectedCountryCode . $cleanedPhoneNumber;
    }

    public function render()
    {
        return view('livewire.pagekontak');
    }
}