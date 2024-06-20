<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\applicationportfolio;
use App\Models\request_table;
use App\Http\Controllers\HomeController;

class user_postController extends Controller
{
    public function index()
    {
        $userpost = applicationportfolio::all();
        $result = $this->mainheader();
        $useraccounts = User::all();
        $clientrequest = request_table::all();
    
        if (Auth::check())
        {
            if (Auth::user()->type == 'admin')
            {
                return view('roles.admin', ['userpost' => $userpost,'result' => $result,'useraccounts' => $useraccounts,'clientrequest' => $clientrequest]);
            }
            elseif (Auth::user()->type == 'user')
            {
                return view('home', ['userpost' => $userpost]);
            }
            else
            {
                return view('roles.client', ['userpost' => $userpost]);
            }
        }
        else
        {
            return view('userpost.index', ['userpost' => $userpost]);
        }
    }


    public function show(Request $request)
    {
        $data = 'nothing';
        return view('test2', compact('data'));
    }
    public function login()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('userpost.create');
    }

    public function android()
    {
        $userpost = applicationportfolio::all();
        $resultpost = 'Online';

        return view('portfolio.android', ['userpost' => $userpost, 'resultpost' => $resultpost]);
    }
    public function website()
    {
        $userpost = applicationportfolio::all();
        $resultpost = 'Online';

        return view('portfolio.website', ['userpost' => $userpost, 'resultpost' => $resultpost]);
    }
    public function system()
    {
        $userpost = applicationportfolio::all();
        $resultpost = 'Online';

        return view('portfolio.system', ['userpost' => $userpost, 'resultpost' => $resultpost]);
    }

    public function mainheader()
    {
        return view('header');
    }

    public function store(Request $request)
    {
    }

    public function edit(applicationportfolio $userpost)
    {
        // dd($userpost);
        return view('userpost.edit', ['userpost' => $userpost]);
    }


    public function update(applicationportfolio $userpost, Request $request)
    {
        $data = $request->validate([
            'appname' => 'required',
            'description' => 'required',
        ]);

        $userpost->update($data);

        return redirect(route('userpost.index'))->with('success', 'Updated Successfully');
    }

    public function destroy(applicationportfolio $userpost)
    {
        $userpost->delete();
        return redirect(route('userpost.index'))->with('success', 'Deleted Successfully');
    }
}
