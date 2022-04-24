<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::firstOrCreate(['name' => 'team-building']);
        Tag::firstOrCreate(['name' => 'international-visit']);
        Tag::firstOrCreate(['name' => 'party']);
        Tag::firstOrCreate(['name' => 'sport']);
        Tag::firstOrCreate(['name' => 'chess']);
        Tag::firstOrCreate(['name' => 'darts']);
        Tag::firstOrCreate(['name' => 'pool']);

    }
}
