<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
	public function __construct() {
		$this->middleware('guest', ['except' => 'logout']);
	}

	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin() {
		return view('auth.login');
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(Request $request) {
        $users = $request->only('account', 'password');
		$rules = ['captcha' => 'required|captcha'];

		$validator = Validator::make($request->only('cpatcha'), $rules);
        if ($validator->fails() && Auth::attempt($users)) {
            return redirect('admin/index');
        } else {
            return redirect('/admin')
                ->withInput($request->only('account', 'password', 'captcha'))
                ->withErrors([
                    'account'   =>  '账户不正确！',
                    'password'  =>  '密码不正确!',
                    'captcha'   =>  '验证码不正确!'
                ]);
        }
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function logout() {
		Auth::logout();
		return redirect('/');
	}
}
