<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     # Seeder tempat mengisi data secara manual lewat project
    public function run()
        #Cara mengisi Seeder sama seperti Controller 
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => '1A',
                'location' => "2nd Floor"
            ],
            [
                'name' => '1B',
                'location' => '2nd Floor'
            ],
            [
                'name' => '1C',
                'location' => '2nd Floor'
            ],
            [
                'name' => '1D',
                'location' => '3rd Floor'
            ],


        ];
        
        foreach($data as $value){
            ClassRoom::insert([
                'name' => $value['name'],
                'location' => $value['location'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }


    }
}
