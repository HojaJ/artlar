<?php

namespace Modules\Work\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

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
                $data['image'] = work_image($request->image);
            }
            $$module_name_singular = $module_model::create($data);
            $$module_name_singular->movement()->attach($request->input('movement_list'));
            $$module_name_singular->material()->attach($request->input('material_list'));
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
                $data['image'] = work_image($request->image);
                if($$module_name_singular->image){
                    remove_image($$module_name_singular->image);
                }
            }
            if ($request->input('material_list') == null) {
                $material_list = [];
            } else {
                $material_list = $request->input('material_list');
            }
            if ($request->input('movement_list') == null) {
                $movement_list = [];
            } else {
                $movement_list = $request->input('movement_list');
            }
            $$module_name_singular->update($data);
            $$module_name_singular->movement()->sync($movement_list);
            $$module_name_singular->material()->sync($material_list);
        }catch (\Exception $e){
            dd($e);
        }
        flash("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect()->route("backend.$module_name.show", $$module_name_singular->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'destroy';
        try{
            $$module_name_singular = $module_model::findOrFail($id);
            if($$module_name_singular->image){
                remove_image($$module_name_singular->image);
            }
            $$module_name_singular->delete();
            $$module_name_singular->movement()->detach();
            $$module_name_singular->material()->detach();
        }catch (\Exception $e){
            dd($e);
        }

        flash('<i class="fas fa-check"></i> '.label_case($module_name_singular).' Deleted Successfully!')->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }


}
