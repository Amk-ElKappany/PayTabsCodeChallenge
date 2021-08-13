<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Category A'
            ],
            [
                'name' => 'Category B'
            ],
            [
                'name' => 'Category C'
            ],
            [
                'name'   => 'Category A-1',
                'parent' => 1
            ],
            [
                'name'   => 'Category A-2',
                'parent' => 1
            ],
            [
                'name'   => 'Category A-2-1',
                'parent' => 5
            ],
            [
                'name'   => 'Category A-2-2',
                'parent' => 5
            ],
            [
                'name'   => 'Category A-2-2-1',
                'parent' => 7
            ],
            [
                'name'   => 'Category B-1',
                'parent' => 2

            ],
            [
                'name'   => 'Category B-2',
                'parent' => 2

            ],
        ];

        // Using Query Builder
        foreach ($data as $item){
            $this->db->table('categories')->insert($item);
        }
    }
}