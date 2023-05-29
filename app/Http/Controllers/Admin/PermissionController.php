<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','show']]);
         $this->middleware('permission:permission-create', ['only' => ['create','store']]);
         $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id', 'desc')->get();
        return view('admin.permissions.index')->with(compact(['permissions']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = new Permission;
        $permission->name       = $request->name.'-list';
        $permission->guard_name = 'web';
        $permission->save();

        $permission1 = new Permission;
        $permission1->name       = $request->name.'-create';
        $permission1->guard_name = 'web';
        $permission1->save();

        $permission2 = new Permission;
        $permission2->name       = $request->name.'-edit';
        $permission2->guard_name = 'web';
        $permission2->save();

        $obj = new Permission;
        $obj->name       = $request->name.'-delete';
        $obj->guard_name = 'web';
        $obj->save();

        if ($obj->save() ) {
            \LogActivity::addToLog('Permission added successfully.');
            return redirect()->route('permissions.index')->with(['success' => 'Permission added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add Permission.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $permissions = Permission::all();
        return view('admin.permissions.edit')->with(compact(['permission', 'permissions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->name       = $request->name;
        $permission->guard_name = 'web';

        if ($permission->save() ) {
            \LogActivity::addToLog('Permission successfully updated.');
            return redirect()->route('permissions.index')->with(['success' => 'Permission successfully updated.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update Permission.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        if ($permission->delete()) {
            \LogActivity::addToLog('Permission successfully deleted.');
            return redirect()->back()->with(['success' => 'Permission successfully deleted.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete Permission.']);
    }
  
}
