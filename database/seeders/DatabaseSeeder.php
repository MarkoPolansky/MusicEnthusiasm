<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TagSeeder::class);
        Event::factory(50)->create();
        Image::factory(200)->create();

        $tags  = Tag::all();

       foreach (Event::all() as $event) {
           $event->tags()->attach($tags->get(random_int(0, $tags->count())));
       }

    }
}
