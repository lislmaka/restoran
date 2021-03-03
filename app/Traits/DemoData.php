<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait DemoData
{
    public function demoImages()
    {
        $directory = public_path('images/demo/demo1');
        return File::files($directory);
    }
}
