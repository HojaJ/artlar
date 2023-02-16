<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

class ImageOptimize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'optimize:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $folders = Storage::disk('public')->directories('files');
        foreach ($folders as $folder){
            $new_folder = public_path() . '/'. $folder;
            File::makeDirectory($new_folder,$mode = 0777, true, true);
            $images = Storage::disk('public')->files($folder);
            foreach ($images as $image){
                $full_path = $new_folder  . '/'. pathinfo($image,PATHINFO_FILENAME) . '.jpg';

                if(!file_exists($full_path)){
                    $img = Image::make(storage_path('app/public/'.$image));
                    if($img->filesize() > 2500000){
                        $percentage = 100 - intval((($img->filesize() - 2500000) / $img->filesize()) * 100);
                        $img->encode('jpg')->save($full_path, $percentage);
                    }
                }
            }
        }
        echo 'Done!';
    }
}
