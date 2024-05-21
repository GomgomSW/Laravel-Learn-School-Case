<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        /*
            Seeder itu cara untuk mengisi database yang kosong
            kita bisa menspecify sendiri value dari datanya 
            tanpa dari xampp

            sedangkan faker itu mengisi database kosong dengan
            otomatis, gak kita masukin sendiri tapi otomatis
        */

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            #Parentnya dulu baru childnya ditulus
            #di case project kita class menjadi parent karena student pnya foreign key pada class
            ClassSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
