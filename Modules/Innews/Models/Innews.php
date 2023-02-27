<?php

namespace Modules\Innews\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Innews extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $table = 'innews';

    protected $appends = ['image_path'];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Innews\database\factories\InnewsFactory::new();
    }

    public function getImagePathAttribute()
    {
        return substr($this->image, 0, strrpos($this->image, '.') ) . '.jpg';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
