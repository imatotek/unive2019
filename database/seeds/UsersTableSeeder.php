<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class,35)->create();
        // $2y$10$5Ptbmp8e6pECjDlvgNL3meleR8nsaAd0wMt6xd13YjuWJiKrXMAM6
        
    }
}
