<?php

use Illuminate\Database\Seeder;

use App\User as User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class, 10)->create()->each(function($users){
            $users->save();
        });
    }
}
