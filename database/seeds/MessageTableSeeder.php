<?php

use Illuminate\Database\Seeder;


class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('messages')->insert([
          'body' =>'firstMessage Seeded',
          'user_id' =>'1'
      ]);

      DB::table('messages')->insert([
          'body' =>'secondMessage Seeded',
          'user_id' =>'1'
      ]);

      DB::table('messages')->insert([
          'body' =>'Hi my name is unknown ok',
          'user_id' =>'2'
      ]);

    }
}
