<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        do {
          $created = $faker->dateTimeThisDecade($max = 'now');
          $updated = $faker->dateTimeThisDecade($max = 'now');
        } while($created > $updated);
        DB::table('post_categories')->insert([
          [
            'name' => 'Sport',
            'post_category_id' => 1,
            '_lft' => 1,
            '_rgt' => 2,
            'created_at' => $created,
            'updated_at' => $updated,
          ],
          [
            'name' => 'Education',
            'post_category_id' => 2, 
            '_lft' => 2,
            '_rgt' => 3,
            'created_at' => $created,
            'updated_at' => $updated,
          ],
          [
            'name' => 'Media',
            'post_category_id' => 3,
            '_lft' => 4,
            '_rgt' => 5,
            'created_at' => $created,
            'updated_at' => $updated,
          ],
          [
            'name' => 'Travel',
            'post_category_id' => 4,
            '_lft' => 6,
            '_rgt' => 7,
            'created_at' => $created,
            'updated_at' => $updated,
          ]
        ]);
    }
}
