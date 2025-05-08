<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    $tags = [
      'Prestasi',
      'Berita',
      'Kegiatan',
      'Pengumuman',
      'Artikel',
      'Lainnya'
    ];

    foreach ($tags as $tag) {
      Tag::create([
        'name' => strtolower($tag),
      ]);
    }
  }
}
