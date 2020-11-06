<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();

        foreach (\App\Models\User::all() as $user) {
            $user->ownedTeams()->save(\App\Models\Team::forceCreate([
                'user_id' => $user->id,
                'name' => 'Dev Team',
                'personal_team' => true,
            ]));
        }

        \App\Models\Post::factory(1000)->create();
    }
}
