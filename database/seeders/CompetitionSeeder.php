<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competition = [
            [
               'user_id' => 2,
               'title'=>'Kontes1',
               'slug' => Str::slug('Kontes1', '-'),
               'date' => '2022-01-17',
               'time'=> '19:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 3
            ],
            [
               'user_id' => 2,
               'title'=>'Kontes2',
               'slug' => Str::slug('Kontes2', '-'),
               'date' => '2022-02-28',
               'time'=> '10:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 3
            ],
            [
               'user_id' => 3,
               'title'=>'Kontes3',
               'slug' => Str::slug('Kontes3', '-'),
               'date' => '2022-03-15',
               'time'=> '20:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 1
            ],
            [
               'user_id' => 3,
               'title'=>'Kontes4',
               'slug' => Str::slug('Kontes4', '-'),
               'date' => '2022-03-15',
               'time'=> '20:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 1
            ],
            [
               'user_id' => 4,
               'title'=>'Kontes5',
               'slug' => Str::slug('Kontes5', '-'),
               'date' => '2022-03-15',
               'time'=> '20:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 1
            ],
            [
               'user_id' => 4,
               'title'=>'Kontes6',
               'slug' => Str::slug('Kontes6', '-'),
               'date' => '2022-03-15',
               'time'=> '20:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 1
            ],
            [
               'user_id' => 2,
               'title'=>'Kontes7',
               'slug' => Str::slug('Kontes7', '-'),
               'date' => '2022-03-15',
               'time'=> '20:00',
               'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
               'max_person' => 1
            ],
        ];

        foreach ($competition as $key => $value) {
            Competition::create($value);
        }
    }
}
