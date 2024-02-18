<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.users');
    }
    public function display()
    {
        $user = User::with('roles')->get();
        return response()->json($user);
    }
    public function save(UserRequest $request)
    {
        $user = User::create([
            'name'      => $request->name,
            'id_number' => $request->id_number,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);
        $user->assignRole($request->role);
        return response()->json(['message' => 'User Added Successfully', 'success' => true]);
    }
    public function edit($id)
    {
        $user = User::with('roles')->find($id);
        return response()->json($user);
    }
    public function update(Request $request)
    {
        $validator;
        if($request->password != null){
            $validator = Validator::make($request->all(),[
                'role' => 'required',
                'name'     =>  'required',
                'id_number'  =>  'required',
                'email'     =>  'required|email',
                'password'       =>  'required|min:8|']);
        }else{
            $validator = Validator::make($request->all(),[
                'role' => 'required',
                'name'     =>  'required',
                'id_number'  =>  'required',
                'email'     =>  'required|email']);
        }
        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'error' => $validator->messages() 
            ]);
        }
        //If inputs is good
        $user = User::find($request->user_id);
        if ($user) {
            if($request->password != null){
                $user->update([
                    'name' => $request->name,
                    'id_number' => $request->id_number,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            }else{
                $user->update([
                    'name' => $request->name,
                    'id_number' => $request->id_number,
                    'email' => $request->email
                ]);
            }
            $user->syncRoles($request->role);
            return response()->json(['message' => 'User Updated Successfully', 'success' => true]);
        }
        return response()->json('User not found', 404);
    }
    public function delete(Request $request)
    {
        User::whereid($request->id)->delete();
        return response()->json(['message' => 'User Deleted Successfully', 'success' => true]);
    }
}