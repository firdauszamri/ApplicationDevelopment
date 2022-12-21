<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $member = [
            'name' => 'Lue Guo Ming',
            'email' => 'shs.2014.lgm@gmail.com',
            'club_id' => 1,
            'password' => bcrypt('123456')
        ];
        User::create($member);
    }
}
