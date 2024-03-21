<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

    
class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-show', ['only' => ['show']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
         $this->middleware('permission:user-create', ['only' => ['create']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            $roles = Role::pluck('name', 'name')->all();
            $userRole = $user->roles->pluck('name', 'name')->all();
            return view('users.show', compact('user', 'roles', 'userRole'));
        } catch (ModelNotFoundException $e) {
            // Handle the scenario where the user with the given ID does not exist
            abort(404);
        }
    }

    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);
            $roles = Role::pluck('name', 'name')->all();
            $userRole = $user->roles->pluck('name', 'name')->all();
            return view('users.edit', compact('user', 'roles', 'userRole'));
        } catch (ModelNotFoundException $e) {
            // Handle the scenario where the user with the given ID does not exist
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$id, // Ensure email is unique, excluding the current user
        'password' => 'required|same:confirm-password',
        'roles' => 'required'
    ]);

    try {
        $user = User::findOrFail($id);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user->update($input); // Update the existing user instead of creating a new one
        $user->syncRoles($request->input('roles')); // Use syncRoles to update user roles

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    } catch (ModelNotFoundException $e) {
        // Handle the scenario where the user with the given ID does not exist
        abort(404);
    } catch (\Exception $e) {
        // Handle other exceptions, such as database errors
        return back()->withInput()->withErrors(['error' => 'An error occurred while updating the user.']);
    }
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

}