<?php

namespace Modules\Material\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'materials';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Material\database\factories\MaterialFactory::new();
    }

    public function work() {
        return $this->belongsToMany('Modules\Work\Models\Work');
    }
}
