<?php

namespace Modules\Material\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MaterialsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Materials';

        // module name
        $this->module_name = 'materials';

        // directory path of the module
        $this->module_path = 'material::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-sheet-plastic';

        // module model name, path
        $this->module_model = "Modules\Material\Models\Material";
    }



}
