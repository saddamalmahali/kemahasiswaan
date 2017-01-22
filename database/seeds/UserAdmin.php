<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@sttgarut.ac.id";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
