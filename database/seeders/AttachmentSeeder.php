<?php

namespace Database\Seeders;

use App\Models\Attachment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disk  = 'public';
        $path = 'avatar.png';
        $is_default = true;
        Attachment::create(compact('disk','path','is_default'));
        $path = 'logo.jpeg';
        Attachment::create(compact('disk','path','is_default'));
    }
}
