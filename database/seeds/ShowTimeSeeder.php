<?php

use Illuminate\Database\Seeder;

class ShowTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('show_times')->insert([
            'movie_id' => 1,
            'ticket_class_id' => 1,
            'date' => '2021-06-02',
            'start_at' => '10:00:00',
            'end_at' => '12:00:00',
        ]);

        DB::table('show_times')->insert([
            'movie_id' => 1,
            'ticket_class_id' => 1,
            'date' => '2021-06-02',
            'start_at' => '12:00:00',
            'end_at' => '14:00:00',
        ]);

        DB::table('show_times')->insert([
            'movie_id' => 1,
            'ticket_class_id' => 2,
            'date' => '2021-06-02',
            'start_at' => '10:00:00',
            'end_at' => '12:00:00',
        ]);

        DB::table('show_times')->insert([
            'movie_id' => 1,
            'ticket_class_id' => 3,
            'date' => '2021-06-02',
            'start_at' => '10:00:00',
            'end_at' => '12:00:00',
        ]);
    }
}
