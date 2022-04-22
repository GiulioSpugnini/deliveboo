<?php

use Illuminate\Database\Seeder;
use App\models\User_info;
use App\User;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user_ids = User::orderBy('id', 'ASC')->pluck('id')->toArray();
        $users = array();
        foreach ($user_ids as $user_id) {
            $users[] =
                ['user_id' => $user_id, 'p_iva' => 'u9d0uq390dfu90'];
        }
        foreach ($users as $user) {

            $user_info = new User_info();
            $user_info->user_id = $user['user_id'];
            $user_info->p_iva = $user['p_iva'];
            $user_info->save();
        }
    }
}
