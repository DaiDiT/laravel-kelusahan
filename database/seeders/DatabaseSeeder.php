<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'ujangkarhud',
            'email' => 'jangu@gmail.com',
            'password' => 'janguujang'
        ]);

        User::create([
            'name' => 'asepbubur',
            'email' => 'aseeeepp@gmail.com',
            'password' => 'sepkasep'
        ]);

        Post::create([
            'user_id' => 1,
            'body' => 'Di sini saya mau sedikit cerita terkait kenapa saya bisa seperti pada cerita sebelumnya. Awalnya saya hanya coba-coba namun lama kelamaan saya malah ketagihan. Saya tau ini memang kesalahan saya, tapi saya rasa tidak semuanya itu salah saya, kalian pun pasti setuju kan? Coba anda bayangkan saja. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        
        Post::create([
            'user_id' => 1,
            'body' => 'Di sini saya mau sedikit cerita terkait kenapa saya bisa seperti pada cerita sebelumnya. Awalnya saya hanya coba-coba namun lama kelamaan saya malah ketagihan. Saya tau ini memang kesalahan saya, tapi saya rasa tidak semuanya itu salah saya, kalian pun pasti setuju kan? Coba anda bayangkan saja...'
        ]);

        Post::create([
            'user_id' => 2,
            'body' => 'Bubur mang asep geura kadieu cep seepkeun bubur mangggggggggggg'
        ]);

        Post::create([
            'user_id' => 2,
            'body' => 'Test pake tagar cuyy #tagar #anjay'
        ]);

        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'body' => 'Bung teu hayang da teu ngeunah'
        ]);

        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'body' => 'Lebay'
        ]);

        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'body' => 'Kehed'
        ]);

        Like::create([
            'user_id' => 2,
            'post_id' => 2
        ]);

        // for ($i=0; $i < 999; $i++) { 
        //     # code...
        //     Like::create([
        //         'user_id' => 2,
        //         'post_id' => 1
        //     ]);
        // }

        // for ($i=0; $i < 100000; $i++) { 
        //     # code...
        //     Like::create([
        //         'user_id' => 1,
        //         'post_id' => 2
        //     ]);
        // }
    }
}
