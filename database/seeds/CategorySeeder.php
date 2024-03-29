<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i <= 20; $i++) { 
            $parent_id = $faker->numberBetween(0, 5);

            DB::table('categories')->insert([
                'parent_id' => $parent_id,
                'name' => $faker->unique()->text(20),
                'description' => $faker->unique()->text(500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
