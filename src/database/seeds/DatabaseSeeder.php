<?php

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
        $this->call([
            TodoSeeder::class,
        ]);//TodoSeederをインスタンス化し、run()実行する。
    }
}
