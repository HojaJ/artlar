<?php

namespace Modules\Work\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Work extends BaseModel
{
    use Notifiable;
    use LogsActivity;
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $appends = ['image_path'];


    protected $table = 'works';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function getImagePathAttribute()
    {
        $url =  explode('/',$this->image);
        return $url[2] . '/' . $url[3] .'/' . pathinfo($url[4],PATHINFO_FILENAME) . '.jpg';
    }

    public function rarity() {
        return $this->belongsTo('Modules\Rarity\Models\Rarity');
    }

    public function movement() {
        return $this->belongsToMany('Modules\Movement\Models\Movement');
    }

    public function medium() {
        return $this->belongsTo('Modules\Medium\Models\Medium');
    }

    public function material() {
        return $this->belongsToMany('Modules\Material\Models\Material');
    }

    public function artist() {
        return $this->belongsTo('Modules\Artist\Models\Artist');
    }


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Work\database\factories\WorkFactory::new();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
