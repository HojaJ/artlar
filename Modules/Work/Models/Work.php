<?php

namespace Modules\Work\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Work extends BaseModel
{
    use Notifiable;
    use LogsActivity;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'works';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function rarity() {
        return $this->belongsTo('Modules\Rarity\Models\Rarity');
    }

    public function movement() {
        return $this->belongsTo('Modules\Movement\Models\Movement');
    }

    public function medium() {
        return $this->belongsTo('Modules\Medium\Models\Medium');
    }

    public function material() {
        return $this->belongsTo('Modules\Material\Models\Material');
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
}
