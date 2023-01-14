<?php

namespace Modules\Rarity\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class RaritiesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Rarities';

        // module name
        $this->module_name = 'rarities';

        // directory path of the module
        $this->module_path = 'rarity::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-compass';

        // module model name, path
        $this->module_model = "Modules\Rarity\Models\Rarity";
    }

}
