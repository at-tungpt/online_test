<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN');
        $role = Role::all()->pluck('id');
        DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('123456'),
          'remember_token' => str_random(100),
          'created_at' => $faker->dateTimeThisDecade($max = 'now'),
          'updated_at' => $faker->dateTimeThisDecade($max = 'now'),
        ]);
        for($i = 0; $i < 100; $i++) {
          do {
            $created = $faker->dateTimeThisDecade($max = 'now');
            $updated = $faker->dateTimeThisDecade($max = 'now');
          } while($created > $updated);
          if($created <= $updated) {
            DB::table('users')->insert([
              'name' => $faker->firstName().' '.$faker->lastName(),
              'email' => $faker->unique()->userName().'@gmail.com',
              'password' => bcrypt('123456'),
              'gender' => $faker->numberBetween($max = 3, $min = 1),
              'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'number_phone' => $faker->numberBetween($max = 1000000000, $min = 99999999999),
              'role_id' => $faker->randomElement($role->toArray()),
              'remember_token' => str_random(100),
              'created_at' => $created,
              'updated_at' => $updated,
            ]);
          } else {
            $i--;
          }
        }
    }
}
