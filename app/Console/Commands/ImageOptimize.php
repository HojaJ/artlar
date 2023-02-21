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
//            $folder = storage_path() . '/'. $folder;
            $images = Storage::disk('public')->files($folder);
            foreach ($images as $image){
                $old_file = storage_path('app/public/'.$image);
                $img = Image::make($old_file);
                $folder_ = storage_path() . '/app/public/'. $folder;
                File::makeDirectory($folder_,$mode = 0777, true, true);
                $new_file = $folder_  . '/'. pathinfo($image,PATHINFO_FILENAME) . '.jpg';
                File::delete($old_file);
                $img->encode('jpg')->save($new_file);

                if($img->filesize() > 2500000){

                    $percentage = 100 - intval((($img->filesize() - 2500000) / $img->filesize()) * 100);
                    $img->save($img->basePath(), $percentage);
                }
            }
        }

    }

    public function old_image_converter()
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
                    }else{
                        $img->encode('jpg')->save($full_path);
                    }
                }
            }
        }
        echo 'Done!';
    }
}
