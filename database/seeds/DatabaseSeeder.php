<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //
        // Model::unguard();
        //
        // $this->call(UsersTableSeeder::class);
        //
        // Model::reguard();


        // $users = factory(User::class)->times(50)->make();
        // User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
        //
        // $user = User::find(1);
        // $user->name = 'Aufree';
        // $user->email = 'aufree@yousails.com';
        // $user->password = bcrypt('password');
        // $user->is_admin = true;
        // $user->activated = true;
        // $user->save();



        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        Model::reguard();
    }
}
