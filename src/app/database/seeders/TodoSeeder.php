<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert(
            [
              [
                'title' => 'テスト1',
                'content' => 'テスト1です。',
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'title' => 'テスト2',
                'content' => 'テスト2です。',
                'created_at' => now(),
                'updated_at' => now(),
              ],
              [
                'title' => 'テスト2',
                'content' => 'テスト2です。',
                'created_at' => now(),
                'updated_at' => now(),
              ],
            ]
          );
    }
}
