<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
        [   'name' => 'vi',
            'lname' => 'ews',
            'user' => 'views',
            'password' => bcrypt('12345'),
            'role' => 0,
            'dept' => 'AFD'

        ],
        [   'name' => 'us',
            'lname' => 'usa',
            'user' => 'user',
            'password' => bcrypt('123456'),
            'role' => 1, //user แต่ละฝ่าย
            'dept' => 'AFD'          
        ],
        [   'name' => 'admin',
            'lname' => 'ladmin',
            'user' => 'adminle1',
            'password' => bcrypt('1234'),
            'role' => 2, //พี่เบล
            'dept' => 'AFD'         
        ],
        [   'name' => 'admin',
        'lname' => 'ladmin',
        'user' => 'adminle2', //พี่เกด
        'password' => bcrypt('12347'),
        'role' => 3, 
        'dept' => 'AFD'       
       ],    
    ];
        foreach($users as $user)
        {
            user::create($user);
        }
    }
}
