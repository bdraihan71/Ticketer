<?php

use Illuminate\Database\Seeder;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_categories')->insert([
            'name' => '2D',
            'movie_id' =>1
        ]);

        DB::table('ticket_categories')->insert([
            'name' => 'VIP',
            'movie_id' =>1
        ]);

        DB::table('ticket_categories')->insert([
            'name' => 'Premium',
            'movie_id' =>1
        ]);

        DB::table('ticket_categories')->insert([
            'name' => '3D',
            'movie_id' =>2
        ]);

        DB::table('ticket_categories')->insert([
            'name' => 'VIP',
            'movie_id' =>2
        ]);

        DB::table('ticket_categories')->insert([
            'name' => 'Premium',
            'movie_id' =>2
        ]);

    }
}
