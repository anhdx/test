<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Post::class,20)->create();
         
    }
}
