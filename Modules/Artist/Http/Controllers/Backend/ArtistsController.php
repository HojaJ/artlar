<?php

namespace Modules\Artist\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ArtistsController extends BackendBaseController
{
    use Authorizable;


    public function __construct()
    {
        // Page Title
        $this->module_title = 'Artists';

        // module name
        $this->module_name = 'artists';

        // directory path of the module
        $this->module_path = 'artist::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-user-tie';

        // module model name, path
        $this->module_model = "Modules\Artist\Models\Artist";
    }
}
