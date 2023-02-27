<?php

namespace Modules\Innews\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class InnewsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Innews';

        // module name
        $this->module_name = 'innews';

        // directory path of the module
        $this->module_path = 'innews::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Innews\Models\Innews";
    }

}
