<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    { 
        $users=DB::table('users')->select('*')->orderBy('id', 'desc')->paginate(500);
        //User::all()->paginate(500);
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
     /*   $request->validate([
            'email' => 'unique:user|min:5',
            'user_name' => 'unique:user|min:5',
           
          ]);
  */
        $input = $request->all();
        if ($file = $request->file('image')) {
           $name = 'user'.time().$file->getClientOriginalName();
           $file->move('images/users/', $name);
           $input['image'] = $name;
        }
        User::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');        
    }

    public function show( int $id)
    {
    }

    public function show_category($id)
    {
        $users=DB::table('users')->select('*')->where('role',$id)->orderBy('id', 'desc')->paginate(500);
        return view('backend.users.users',compact('users'));
    //    Route::view('/user/category', 'backend.users.users',);
      
    }

    public function edit( $id)
    {
    }

    public function update(Request $request,  $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = 'user_'.time().$file->getClientOriginalName();
            $file->move('images/users/', $name);
            $input['image'] = $name;
        }
        $user->update([
           'user_name' => $input['user_name'],
           'last_name' => $input['last_name'],
           'password' => bcrypt($input['password']),
           'first_name' => $input['first_name'],
           'mobile' => $input['mobile'],
           'role' => $input['role'],
           'email' => $input['email'],
           'image' => $input['image'],
        ]);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
