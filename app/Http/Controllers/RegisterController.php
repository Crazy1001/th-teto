<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Validator;

class RegisterController extends Controller
{
    public function index()
    {
        session()->forget('Auth');

        return view('members.register', [
            'message' => ''
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
    	$rules = [
            'account' => [
                'required',
            ],
            'password' => [
                'required',
                'confirmed'
            ],
            'email' => [
                'required',
                'email'
            ],
            'name' => [
                'required',
            ],
            'phone' => [
                'required',
            ],
            'checkit' => [
                'accepted',
            ],
            'promotecode' => [
                'required',
            ],
        ];

    	$validator = Validator::make($input, $rules);
    	if ( $validator->fails() )
    	{
            return redirect('/register')
    			->withErrors($validator)
    			->withInput();
        }

        $rs = DB::select('CALL sp_Front_MemberAdd(?,?,?,?,?,?,?)', [
            $request->account,
            $request->password,
            $request->name,
            $request->phone,
            $request->email,
            $request->promotecode,
            now()
        ]);

        $errors = [];
        if ($rs[0]->ResultCode != 0) {
            $rsCode = str_pad($rs[0]->ResultCode, 5, '0', STR_PAD_LEFT);

            if ( substr($rsCode, 0, 1) == '1' ) {
                $errors = ['promotecode' => __('推广马错误')];
            }

            if ( substr($rsCode, 1, 1) == '1' ) {
                $errors += ['email' => __('Email 重复')];
            }

            if ( substr($rsCode, 2, 1) == '1' ) {
                $errors += ['phone' => __('手机重复')];
            }

            if ( substr($rsCode, 3, 1) == '1' ) {
                $errors += ['name' => __('暱称重复')];
            }

            if ( substr($rsCode, 4, 1) == '1' ) {
                $errors += ['account' => __('帐号已存在')];
            }
        }

        if ($errors) {
            return redirect('/register')
                    ->withErrors($errors)
                    ->withInput();

        } else {

            return redirect('/login')->withErrors(['regOK' => __('注册成功，请重新登入')]);

        }

    }
}
