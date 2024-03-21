<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Hash;
use Illuminate\Support\Arr;

class PermissionController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:user-show', ['only' => ['show']]);
        // $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Permission::orderBy('id','DESC')->paginate(5);
        return view('permissions.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:permissions,name',
        ]);
    
        $permissions = PERMISSION::create([
            'name' => $request->name
        ]);
    
        return redirect()->route('permissions.index')
                        ->with('success','Permissions created successfully');
    }

    public function edit($id)
    {
        try {
            $permission = Permission::findOrFail($id);
            return view('permissions.edit', compact('permission'));
        } catch (ModelNotFoundException $e) {
            // Handle the scenario where the user with the given ID does not exist
            abort(404);
        }
    }

    public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required|string|unique:permissions,name,'.$id,
    ]);
    
    $permission = Permission::findOrFail($id);
    $permission->update($request->all());

    return redirect()->route('permissions.index')
                    ->with('success','Permissions updated successfully');
}

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')
                        ->with('success','Permission deleted successfully');
    }
    
}
