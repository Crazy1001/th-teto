<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->password)) {
            // abort(422, '输入的帐号或密码格式错误');
            return [
                'code'      => '422',
                'status'    => 'ERROR',
                'message'   => __(',,输入的帐号或密码格式错误')
            ];

        }

        $rs = DB::select('CALL sp_Front_Login(?)', [
                $request->name
        ]);

        if (isset($rs[0]->ResultCode) && $rs[0]->ResultCode == 1)
        {
            // abort(422, '帐号或密码错误');
            return [
                'code'      => $rs[0]->ResultCode,
                'status'    => 'ERROR',
                'message'   => __('帐号或密码错误')
            ];


        } else {
            if ($request->password !== $rs[0]->MemberPassword) {
                return [
                    'code'      => 0,
                    'status'    => 'ERROR',
                    'message'   => __('帐号或密码错误')
                ];
            }
        }

        session(['Auth' => $rs]);

        return [
            'status' => 'ok',
            'message' => session('Auth')
        ];
    }
}
