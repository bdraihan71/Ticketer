<?php

use Illuminate\Database\Seeder;

class TicketClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 1,
            'name' => 'Economic',
            'price' => 15000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 1,
            'name' => 'Business',
            'price' => 20000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 2,
            'name' => 'Economic',
            'price' => 30000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 2,
            'name' => 'Business',
            'price' => 35000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 3,
            'name' => 'Economic',
            'price' => 40000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 3,
            'name' => 'Business',
            'price' => 45000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 4,
            'name' => 'Economic',
            'price' => 25000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 4,
            'name' => 'Business',
            'price' => 30000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 5,
            'name' => 'Economic',
            'price' => 35000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 5,
            'name' => 'Business',
            'price' => 40000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 6,
            'name' => 'Economic',
            'price' => 45000
        ]);

        DB::table('ticket_classes')->insert([
            'ticket_category_id' => 6,
            'name' => 'Business',
            'price' => 50000
        ]);
    }
}
