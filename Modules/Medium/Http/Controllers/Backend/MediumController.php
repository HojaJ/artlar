<?php

namespace Modules\Medium\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MediumController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Medium';

        // module name
        $this->module_name = 'medium';

        // directory path of the module
        $this->module_path = 'medium::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-paintbrush';

        // module model name, path
        $this->module_model = "Modules\Medium\Models\Medium";
    }


}
