<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
         $user = new User();
         $user->name = 'rasel';
         $user->email = 'rasel@gmail.com';
         $user->password = bcrypt("123456");
         $user->save();

        $user->name = 'rasel ahmed';
        $user->email = 'raselbabu34.bd@gmail.com';
        $user->password = bcrypt("123456");
        $user->save();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
