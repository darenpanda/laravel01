<?php

namespace Database\Seeders;

use App\Models\User; //  ネームスペースを追加
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         User::factory(10)->create(); // ここのコメントアウトを外す
    }
}