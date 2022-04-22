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

        $user = new User();
        $user->is_admin = 0;

        $user->name = 'Carlo';
        $user->last_name = 'Carletto';
        $user->password = bcrypt('password');
        $user->number = '333333323';
        $user->email = 'carlo@user.com';
        $user->address = 'Via carli 44';

        $user->save();
    }
}
