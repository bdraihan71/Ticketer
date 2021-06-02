<?php

use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 12; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 1,
                'show_time_id' => 1
            ]);
        }

        for($i = 1; $i < 7; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 2,
                'show_time_id' => 2
            ]);
        }

        for($i = 1; $i < 11; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 3,
                'show_time_id' => 3
            ]);
        }

        for($i = 1; $i < 8; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 4,
                'show_time_id' => 4
            ]);
        }

        for($i = 1; $i < 13; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 5,
                'show_time_id' => 5
            ]);
        }

        for($i = 1; $i < 7; $i++){
            DB::table('seats')->insert([
                'name' => 'Seat ' . $i,
                'ticket_class_id' => 6,
                'show_time_id' => 6
            ]);
        }


    }
}
