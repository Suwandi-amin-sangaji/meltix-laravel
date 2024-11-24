<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EO;
use App\Models\Event;
use App\Models\Riwayat;
use App\Models\Ticket;
use App\Models\User;
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
        User::factory(10)->create();

        EO::factory(3)->create();
        Event::factory(10)->create();
        Riwayat::factory(10)->create();
        Ticket::factory(50)->create();
        // Order::factory(50)->create();
        // OrderDetail::factory(100)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'test@example.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'role' => 'EO',
        //     'eo_id' => 1
        // ]);
    }
}
