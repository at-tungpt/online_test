<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
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
        DB::table('roles')->insert([
          [
            'role' => 'admin',
            'created_at' => $created,
            'updated_at' => $updated,
          ],
          [
            'role' => 'teacher',
            'created_at' => $created,
            'updated_at' => $updated,
          ],
          [
            'role' => 'student',
            'created_at' => $created,
            'updated_at' => $updated,
          ]
        ]);
    }
}
