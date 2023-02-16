<?php

namespace Modules\Artist\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Work\Models\Work;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Artist extends BaseModel
{
    use Notifiable;
    use LogsActivity;
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $appends = ['full_name'];

    protected $table = 'artists';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->name) . ' ' . ucfirst($this->surname);
    }

    public function country() {
        return $this->belongsTo('Modules\Country\Models\Country');
    }

    public function profession() {
        return $this->belongsTo('Modules\Profession\Models\Profession');
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }



    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Artist\database\factories\ArtistFactory::new();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
