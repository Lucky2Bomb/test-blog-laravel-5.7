<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $categoryName = 'no category';

        $categories[] = [
            'title'     => $categoryName,
            'slug'      => str_slug($categoryName),
            'parent_id' => 0
        ];

        for ($i = 1; $i <= 10; $i++) {
            $categoryName = 'Category No. ' . $i;
            $parentId = ($i > 4) ? rand(1, 4) : 1;

            $categories[] = [
                'title'     => $categoryName,
                'slug'      => str_slug($categoryName),
                'parent_id' => $parentId
            ];
        }

        \DB::table('blog_categories')->insert($categories);
    }
}
