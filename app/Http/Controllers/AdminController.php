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
        return view('admin.index')->withUsers($users);
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

        // check if email exist
        $user = User::where('email', $request->email)->count();
        if($user == 1) {
            Session::flash('flash_message','Email Already Exists!');
            return redirect()->back();
        }

        $input = $request->all();
        User::create($input);

        Session::flash('flash_message','User Succesfully Added!');

        return redirect()->back();

    }

    public function show($id)
    {
        $item = Items::find($id);
        return view('admin.show')->withItem($task);
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.edit')->withItem($item);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $this->validate($request, [
            'id_bmn' => 'required'
        ]);

        $input = $request->all();
        $item->fill($input)->save();
        Session::flash('flash_message','Admin successfully edited!');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        Session::flash('flash_message','Item successfully Delete');

        return redirect()->route('admin.index');
    }
}
