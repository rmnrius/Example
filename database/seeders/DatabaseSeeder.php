<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PaintingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Ramon',
            'last_name' => 'Rius',
            'email' => 'rmnrius@gmail.com',
        ]);

        $this->call(PaintingSeeder::class);
    }
}

// php artisan db:seed --class=DatabaseSeeder . eto pag may seeder ka lang na gusto irun at hindi lahat gusto mo irun
// php artisan migrate:fresh --seed           . eto pag gusto mo ireset lahat ng tables at magseed ulit
