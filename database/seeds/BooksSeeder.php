<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class BooksSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Book::class, 50)->create(); 
      factory(App\Author::class, 15)->create(); 
      
      $bookTotal=50;
      for ($i =1; $i < $bookTotal; $i++) {
          DB::table('author_book')->insert([
              'book_id' => $i,
              'author_id'=> rand(1,15)
          ]);
      }
      
      

    }
}