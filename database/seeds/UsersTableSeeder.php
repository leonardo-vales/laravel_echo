<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();

        factory(User::class)->create([
            'name'  => 'Leonardo Vales',
            'email' => 'leohenrique.vales@gmail.com'
        ]);

        factory(User::class)->create([
            'name' => 'Pollyana Ruggio',
            'email' => 'pollycpe@gmail.com'
        ]);
    }
}
