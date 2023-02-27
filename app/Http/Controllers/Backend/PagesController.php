<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Work\Models\Work;

class PagesController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Pages';

        // module name
        $this->module_name = 'pages';

        // directory path of the module
        $this->module_path = 'pages';

        // module icon
        $this->module_icon = 'fas fa-page';

        // module model name, path
        $this->module_model = "App\Models\Setting";
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $works = Work::orderBy('name')->pluck('name', 'id');
//        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate();


        return view(
            "backend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_path', 'module_icon', 'module_action', 'works')
        );
    }

    public function store(Request $request)
    {

        Setting::add('slide', json_encode($request->slide), 'json');
        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
