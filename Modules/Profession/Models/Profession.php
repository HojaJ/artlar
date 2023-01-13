<?php

namespace Modules\Profession\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'professions';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Profession\database\factories\ProfessionFactory::new();
    }
}
