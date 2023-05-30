<?php

namespace App\Http\Controllers;

use App\Models\UserFront;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class UserFrontController extends Controller
{
    public function login()
    {
        return view('front.user_login');
    }
    public function registration()
    {
        return view('front.user_reg');
    }
    public function registration_process(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            "email" => 'required|email|unique:user_fronts,email',
            "password" => 'required',
            "mobile" => 'numeric|required',
            "address1" => 'required',
            "town" => 'required',
            "pcode" => 'required',
        ]);
        $rand_id = rand(111111111, 999999999);
        $model = new UserFront();
        $model->country = $request->post('country');
        $model->title = $request->post('title');
        $model->fname = $request->post('fname');
        $model->lname = $request->post('lname');
        $model->email = $request->post('email');
        $model->password = Crypt::encrypt($request->password);
        $model->phone = $request->post('phone');
        $model->mobile = $request->post('mobile');
        $model->pcode = $request->post('pcode');
        $model->address1 = $request->post('address1');
        $model->address2 = $request->post('address2');
        $model->address3 = $request->post('address3');
        $model->town = $request->post('town');
        $model->is_verify = '0';
        $model->rand_id = $rand_id;
        $model->save();
        $data = ['name' => $request->fname, 'rand_id' => $rand_id];
        $user['to'] = $request->email;
        Mail::send('front/email_verification', $data, function ($messages) use ($user) {
            $messages->to($user['to']);
            $messages->subject('Email Id Verification');
        });
        $msg = "Registration successfully. Please check your email id for verification";
        $request->session()->flash('message', $msg);
        return redirect('/donate/user/login');
    }
    public function email_verification($id)
    {
        //UserFront::where(['rand_id' => $id, 'is_verify' => 0])->update(['rand_id' => '0', 'is_verify' =>  '1']);
        $result = UserFront::where(['rand_id' => $id, 'is_verify' => 0])->get();
        if (isset($result[0])) {
            UserFront::where(['id' => $result[0]->id])
                ->update(['is_verify' => 1, 'rand_id' => '']);
            return view('front.verification');
        } else {
            return redirect('/');
        }
    }
    public function login_process(Request $request)
    {
        $request->validate(
            [

                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        $result = UserFront::where(['email' => $request->email])->get();
        if (isset($result[0])) {
            $db_pwd = Crypt::decrypt($result[0]->password);
            $is_verify = $result[0]->is_verify;
            if ($is_verify == 0) {
                $request->session()->flash('message', 'Please verify your email id');
            }
            if ($db_pwd == $request->password) {
                $request->session()->put('FRONT_USER_LOGIN', true);
                $request->session()->put('FRONT_USER_ID', $result[0]->id);
                return redirect('/donate/user/dashboard');
            } else {
                $request->session()->flash('error', 'Invalid Login');
                return redirect('/donate/user/login');
            }
        } else {
            $request->session()->flash('error', 'Invalid Login');
            return redirect('/donate/user/login');
        }
    }
    public function dashboard(Request $request)
    {
        if ($request->session()->has('FRONT_USER_ID')) {
            $id = $request->session()->get('FRONT_USER_ID');
            $arr = UserFront::where(['id' => $id])->get();
            $result['country'] = $arr[0]->country;
            $result['title'] = $arr[0]->title;
            $result['fname'] = $arr[0]->fname;
            $result['lname'] = $arr[0]->lname;
            $result['email'] = $arr[0]->email;
            //$result['password'] = Crypt::decrypt($arr[0]->password);
            $result['mobile'] = $arr[0]->mobile;
            $result['phone'] = $arr[0]->phone;
            $result['pcode'] = $arr[0]->pcode;
            $result['address1'] = $arr[0]->address1;
            $result['address2'] = $arr[0]->address2;
            $result['address3'] = $arr[0]->address3;
            $result['town'] = $arr[0]->town;
            return view('front.user.user_dashboard', $result);
        } else {
            return redirect('/donate/user/login');
        }
    }
    public function edit_profile()
    {
        return view('front.user.edit_profile');
    }
    public function forget_pass_page()
    {
        return view('front.user_forget');
    }
    public function forgot_password(Request $request)
    {
        $result = UserFront::where(['email' => $request->forgot_email])->get();
        $rand_id = rand(111111111, 999999999);
        if (isset($result[0])) {
            UserFront::where(['email' => $request->forgot_email])
                ->update(['is_forget' => 1, 'rand_id' =>  $rand_id]);

            $data = ['name' => $result[0]->fname, 'rand_id' => $rand_id];
            $user['to'] = $request->forgot_email;
            Mail::send('front/forget_email', $data, function ($messages) use ($user) {
                $messages->to($user['to']);
                $messages->subject('Forgot Password');
            });
            $request->session()->flash('message', 'Please Check your Email');
            return redirect('/donate/user/forget_pass_page');
        } else {
            $request->session()->flash('error', 'Email id does not match');
            return redirect('/donate/user/forget_pass_page');
        }
    }
    public function forgot_password_change(Request $request, $id)
    {
        $result = UserFront::where(['rand_id' => $id, 'is_forget' => 1])->get();
        if (isset($result[0])) {
            $request->session()->put('FORGOT_PASSWORD_USER_ID', $result[0]->id);
            return view('front.forgot_password_change');
        } else {
            return redirect('/');
        }
    }
    public function forgot_password_change_process(Request $request)
    {
        UserFront::where(['id' => $request->session()->get('FORGOT_PASSWORD_USER_ID')])
            ->update(
                [
                    'is_forget' => 0,
                    'password' => Crypt::encrypt($request->password),
                    'rand_id' => ''
                ]
            );

        $request->session()->flash('message', 'Your Password Changed,Now Login');
        return redirect('/donate/user/login');
    }
}
