<?php

namespace Modules\Work\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class WorksController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Works';

        // module name
        $this->module_name = 'works';

        // directory path of the module
        $this->module_path = 'work::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Work\Models\Work";
    }

}
