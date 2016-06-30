<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);

        return view('admin.index', [
            'users' => $users,
            'index' => $users->firstItem()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        //dd($request->input());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        // check if email exist
        $user = User::where('email', $request->email)->count();
        if($user == 1) {
            Session::flash('flash_message','Email Already Exists!');
            return redirect()->back();
        }

        //$input = $request->all();
        $user = User::create($data);

        $user->assignRole($request->role);

        Session::flash('flash_message','User Succesfully Added!');

        return redirect()->back();

    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.show')->withItem($user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => '',
        ];

        //$input = $request->all();
        $item->fill($data)->save();
        Session::flash('flash_message','Admin successfully edited!');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('flash_message','Item successfully Delete');

        return redirect()->route('admin.index');
    }
}
