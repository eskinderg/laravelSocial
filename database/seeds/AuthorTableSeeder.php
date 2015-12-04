<?php

use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert( array (
            'name'=> "Eskinder",
            'bio'=> "Best Author of all time",
            'email'=>"eskinderget@gmail.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('authors')->insert( array (
            'name'=> "Winner",
            'bio'=> "Winner Author of all time",
            'email'=>"winner@hotmail.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('authors')->insert( array (
            'name'=> "Debebe",
            'bio'=> "D biography",
            'email'=>"debebe@yahoo.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

            DB::table('authors')->insert( array (
            'name'=> "Fred",
            'bio'=> "Winner Author of all time",
            'email'=>"fred@fedex.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('authors')->insert( array (
            'name'=> "Seth",
            'bio'=> "Family Guy",
            'email'=>"seth@familyguy.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

            DB::table('authors')->insert( array (
            'name'=> "Dan",
            'bio'=> "Quick brown fox",
            'email'=>"fox@mozilla.com",
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        factory(Social\Models\Author::class,30)->create();

    }
}
