<?php

namespace Modules\Medium\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medium extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medium';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Medium\database\factories\MediumFactory::new();
    }
}
