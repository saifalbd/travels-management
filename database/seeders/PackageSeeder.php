<?php

namespace Database\Seeders;

use App\Models\PackageType;
use App\Models\TypeTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
            'name'=>'Work Visa',
            'tags'=>['Submition','Permit issue','Visa Complete']
            ],
            [
                'name'=>'Visit Visa',
                'tags'=>['Documents Ready','Invitation Copy','File Submit For Embassy/VFS','Visa Complete']
            ],
            [
                'name'=>'Student Visa',
                'tags'=>['Submition','Permit issue','Visa Complete']
            ]
        ];

        foreach ($types as $type) {
            $name = $type['name'];
         $model =   PackageType::create(compact('name'));
         $pack_type_id = $model->id;
         foreach ($type['tags'] as $name) {
           TypeTag::create(compact('name','pack_type_id'));
         }
        }
    }
}
