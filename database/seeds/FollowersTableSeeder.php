<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //所有用户
        $users = User::all();
        $user = $users->first();
        //id为1的用户
        $user_id = $user->id;
        //去掉1的所有用户
        $followers = $users->slice(1);
        //去掉1的所有用户id
        $follower_ids = $followers->pluck('id')->toArray();

        //1关注所有用户
        $user->follow($follower_ids);
        //所有用户关注1
        foreach($followers as $follower){
            $follower->follow($user_id);
        }

    }
}
