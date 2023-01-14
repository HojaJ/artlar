<?php

namespace Modules\Movement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'movements';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Movement\database\factories\MovementFactory::new();
    }
}
