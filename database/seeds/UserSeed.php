<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'student';
        $user->email = 'student@root.com';
        $user->password = '$2y$10$JmxBlG4GBsY5.EhPynGhUecocsHApfctqq/jZ9GviAZl9vpVn80CC';
        $user->type = 'student';
        $user->remember_token = 'HHqCznPhsd1yWgnF5PdF3mMN7GiBgeIrxtS7G2QV678JP8tPq4uxMrelc1ZT';
        $user->created_at = '2018-06-09 12:26:24';
        $user->updated_at = '2018-06-09 12:26:24';
        $user->save();
        $user = new User();
        $user->name = 'affair';
        $user->email = 'affair@root.com';
        $user->password = '$2y$10$JmxBlG4GBsY5.EhPynGhUecocsHApfctqq/jZ9GviAZl9vpVn80CC';
        $user->type = 'affair';
        $user->remember_token = 'HHqCznPhsd1yWgnF5PdF3mMN7GiBgeIrxtS7G2QV678JP8tPq4uxMrelc1ZT';
        $user->created_at = '2018-06-09 12:26:24';
        $user->updated_at = '2018-06-09 12:26:24';
        $user->save();
    }
}
