<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\applicationportfolio;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $useraccounts = User::all();

        return view('roles.admin', ['useraccounts' => $useraccounts]);
    }

    public function update(Request $request)
    {
        $user = User::where('name', $request->name)->firstOrFail();
        $user->type = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Role updated successfully');
    }

    public function adminstore(Request $request)
    {
        /*For testing
         dd($request->post); */
        $data = $request->validate([
            'id' => 'required',
            'imagelink' => 'required',
            'appname' => 'required',
            'description' => 'required',
            'link' => 'required',
            'language' => 'required',
            'created' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);

        $newpost = applicationportfolio::create($data);

        // Set a session variable to indicate the modal should be opened
        session()->flash('openModal', true);

        // Return a redirect response
        return redirect()->back()->with('success', 'Success');
    }
    public function client()
    {
        return view('roles.client');
    }
    public function user()
    {
        return view('home');
    }
}
