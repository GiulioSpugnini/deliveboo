<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->is_admin = 1;

        $user->name = 'Ciccio';
        $user->last_name = 'Ciccetto';
        $user->password = bcrypt('password');
        $user->number = '333333333';
        $user->email = 'ciccio@admin.com';
        $user->address = 'Via cicci 44';

        $user->save();
    }
}
