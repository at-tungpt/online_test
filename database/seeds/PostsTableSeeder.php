<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\PostCategory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::all()->pluck('id');
        $postCategory = PostCategory::all()->pluck('id');
        for($i = 0; $i < 50; $i++) {
          $created = $faker->dateTimeThisDecade($max = 'now');
          $updated = $faker->dateTimeThisDecade($max = 'now');
            if($created <= $updated) {
            DB::table('posts')->insert([
            'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'title' => $faker->sentence($nbWords =10, $variableNbWords = true),
            'description' => $faker->text(),
            'image' => '',
            'video' => '',
            'user_id' => $faker->randomElement($user->toArray()),
            'post_category_id' => $faker->randomElement($postCategory->toArray()),
            'created_at' => $created,
            'updated_at' => $updated,
        ]);
    } else {
        $i--;
    }

    }
}
}
