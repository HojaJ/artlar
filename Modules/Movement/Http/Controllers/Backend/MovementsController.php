<?php

namespace Modules\Movement\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MovementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Movements';

        // module name
        $this->module_name = 'movements';

        // directory path of the module
        $this->module_path = 'movement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Movement\Models\Movement";
    }

}
