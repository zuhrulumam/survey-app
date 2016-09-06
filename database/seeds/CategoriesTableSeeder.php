<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        DB::table("categories")->insert([
            [
                'category_slug' => $faker->unique()->uuid,
                'category_name' => 'Institutional Involvement',
            ],
            [
                'category_slug' => $faker->unique()->uuid,
                'category_name' => 'Technology',
            ],
            [
                'category_slug' => $faker->unique()->uuid,
                'category_name' => 'Design and Content Quality',
            ],
            [
                'category_slug' => $faker->unique()->uuid,
                'category_name' => 'Student',
            ],
            [
                'category_slug' => $faker->unique()->uuid,
                'category_name' => 'Teacher',
            ],
        ]);
    }

}
