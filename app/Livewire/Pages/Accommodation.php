<?php

namespace App\Livewire\Pages;

use App\Models\Accommodation as ModelsAccommodation;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accommodation - Burn 2025')]
class Accommodation extends Component
{
    public function render()
    {
        $accommodations = ModelsAccommodation::where('is_active', true)->orderBy('hotel_star', 'desc')->get();
        return view('livewire.pages.accommodation', ['accommodations' => $accommodations]);
    }
}
