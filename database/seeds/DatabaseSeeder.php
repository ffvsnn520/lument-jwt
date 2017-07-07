<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        Model::reguard();
        factory(App\User::class)->create([
            'email' => 'user1@example.com',
            'password' => app('hash')->make('1234')
        ]);

        factory(App\User::class)->create([
            'email' => 'user2@example.com',
            'password' => app('hash')->make('1234')
        ]);

        factory(App\User::class)->create([
            'email' => 'user3@example.com',
            'password' => app('hash')->make('1234')
        ]);
    }
}
