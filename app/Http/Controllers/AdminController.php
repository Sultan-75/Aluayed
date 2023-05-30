<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate(
            [

                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        $email = $request->post('email');
        $password = $request->post('password');
        $result = Admin::where(['email' => $email, 'password' => $password])->get();
        if (isset($result['0']->id)) {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result['0']->id);
            $request->session()->put('ADMIN_NAME', $result['0']->name);
            $request->session()->put('ADMIN_EMAIL', $result['0']->email);
            $request->session()->put('ADMIN_PASSWORD', $result['0']->password);
            return redirect('admin/dashboard');
        } else {
            $request->session()->flash('error', 'Invalid Login');
            return redirect('admin');
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function setting()
    {
        $result['data'] = Admin::all();
        return view('admin.setting', $result);
    }
    public function profile(Request $request)
    {
        if ($request->session()->has('ADMIN_ID')) {
            $id = $request->session()->get('ADMIN_ID');
            $arr = Admin::where(['id' => $id])->get();
            $result['name'] = $arr[0]->name;
            $result['email'] = $arr[0]->email;
            $result['password'] = $arr[0]->password;
            $result['id'] = $arr[0]->id;
        } else {
            $result['name'] = '';
            $result['email'] = '';
            $result['password'] = '';
            $result['id'] = '';
        }


        return view('admin.profile', $result);
    }
    public function profile_update(Request $request)
    {
        if ($request->session()->has('ADMIN_ID')) {
            $id = $request->session()->get('ADMIN_ID');
            $name = $request->post('name');
            $email = $request->post('email');
            $password = $request->post('password');
        }
        Admin::where(['id' => $id])->update(['name' => $name, 'email' => $email, 'password' => $password]);
        return view('admin.dashboard');
    }
}
