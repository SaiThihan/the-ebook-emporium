<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // user table
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '09777888666',
            'address' => 'Taunggyi',
            'role' => 'admin',
            'gender' => 'male',
            'password' => Hash::make('admin1234'),
        ]);

        // book table
        Book::create([
            'title' => 'A Heart That Works',
            'author' => 'Rob Delaney',
            'description' => "In this memoir of loss, acclaimed writer and comedian Rob Delaney grapples with the fragile miracle of life, the mysteries of death, and the question of purpose for those left behind.When you're a parent ...",
            'category' => 'Autobiography',
            'price' => 29,
            'book' => 'React-book-by-Ei-Maung.pdf',
            'image' => 'defaultUser1.phg',
        ]);

        // category table
        Category::create([
            'name' => 'Autobiography',
            'description' => 'This is a description of category...',
        ]);
    }
}
