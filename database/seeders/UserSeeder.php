<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'password'=> Hash::make('12345'),
               'role'=>'admin',
            ],
            [
               'name'=>'Dazzler',
               'email'=>'dazzlerind07@gmail.com',
               'password'=> Hash::make('fakhri123'),
               'role'=>'user',
            ],
            [
               'name'=>'Organizer1',
               'email'=>'organizer1@gmail.com',
               'password'=> Hash::make('organizer1'),
               'role'=>'organizer',
            ],
            [
               'name'=>'Organizer2',
               'email'=>'organizer2@gmail.com',
               'password'=> Hash::make('organizer2'),
               'role'=>'organizer',
            ],
            
        ]; 
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
