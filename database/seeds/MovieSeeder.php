<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => 'Godzilla vs. Kong',
            'description' => "The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the fearsome Godzilla and the mighty Kong - with humanity caught in the balance.",
            'image' => 'https://m.media-amazon.com/images/M/MV5BZmYzMzU4NjctNDI0Mi00MGExLWI3ZDQtYzQzYThmYzc2ZmNjXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
        ]);

        DB::table('movies')->insert([
            'name' => 'Avengers: Endgame',
            'description' => "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.",
            'image' => 'https://i.pinimg.com/736x/93/f2/44/93f244ae8bd5080208feae973ef3c8d7.jpg',
        ]);

    }
}
