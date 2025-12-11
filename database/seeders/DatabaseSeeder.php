<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            ['name' => 'Adi Kurniawan', 'username' => 'cibinongguy', 'password' => bcrypt('73094621'), 'role' => 'developer', 'clearance_level' => 5, 'gender' => 'male', 'created_by' => 'cibinongguy'],
            ['name' => 'Admin', 'username' => 'admin', 'password' => bcrypt('password'), 'role' => 'admin', 'clearance_level' => 4, 'gender' => 'male', 'created_by' => 'cibinongguy'],
            ['name' => 'Andini Kharisma Putri', 'username' => 'andin', 'password' => bcrypt('andin'), 'role' => 'customer', 'clearance_level' => 1, 'gender' => 'female', 'created_by' => 'cibinongguy'],
            ['name' => 'Aldebaran', 'username' => 'aldebaran', 'password' => bcrypt('aldebaran'), 'role' => 'customer', 'clearance_level' => 1, 'gender' => 'male', 'created_by' => 'cibinongguy'],
            ['name' => 'Andi', 'username' => 'andi', 'password' => bcrypt('andi'), 'role' => 'customer', 'clearance_level' => 1, 'gender' => 'male', 'created_by' => 'cibinongguy'],
            ['name' => 'Albert', 'username' => 'albert', 'password' => bcrypt('albert'), 'role' => 'customer', 'clearance_level' => 1, 'gender' => 'male', 'created_by' => 'cibinongguy'],
            ['name' => 'Dian', 'username' => 'dian', 'password' => bcrypt('dian'), 'role' => 'customer', 'clearance_level' => 1, 'gender' => 'male', 'created_by' => 'cibinongguy'],
        ];

        \Illuminate\Support\Facades\DB::table('users')->insert($users);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
