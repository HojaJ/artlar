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

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';
        try{
            $data = $request->all();
            if($request->image){
                $data['image'] = artist_image($request->image);
            }
            $$module_name_singular = $module_model::create($data);
        }catch (\Exception $e){
            dd($e);
        }
        flash("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Added")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        try{
            $$module_name_singular = $module_model::findOrFail($id);
            $data = $request->all();
            if($request->image){
                $data['image'] = artist_image($request->image);
                if($$module_name_singular->image){
                    remove_image($$module_name_singular->image);
                }
            }
            $$module_name_singular->update($data);
        }catch (\Exception $e){
            dd($e);
        }
        flash("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect()->route("backend.$module_name.show", $$module_name_singular->id);
    }

}
