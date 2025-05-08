<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Filament\Forms\Components\TagsInput;

class TagSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    TagsInput::make('tags')->suggestions([
      'SIJA',
      "TE",
      'TO',
      'KPBS',
      'TKP',
      'TKL',
      'TFLM',
    ]);
  }
}
