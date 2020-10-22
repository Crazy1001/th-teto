<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {   
        session()->forget('Auth');

        return view('members.login', [
            'message' => ''
        ]);
    }

    public function logout()
    {
        session()->forget('Auth');

        return view('members.login', [
            'message' => ''
        ]);
    }

    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->password)) {
            return view('members.login', [
                'code'      => '422',
                'status'    => 'ERROR',
                'message'   => __('输入的帐号或密码格式错误')
            ]);

        }

        $rs = DB::select('CALL sp_Front_Login(?)', [
                $request->name
        ]);

        if (isset($rs[0]->ResultCode) && $rs[0]->ResultCode == 1)
        {
            // abort(422, '帐号或密码错误');
            return view('members.login',[
                'code'      => $rs[0]->ResultCode,
                'status'    => 'ERROR',
                'message'   => __('帐号或密码错误')
            ]);


        } else {
            if ($request->password !== $rs[0]->MemberPassword) {
                return view('members.login', [
                    'code'      => 0,
                    'status'    => 'ERROR',
                    'message'   => __('帐号或密码错误')
                ]);
            }
        }

        // 会员资料
        $urs = DB::select('CALL sp_Front_MemberInformationDetail(?)', [
            $rs[0]->MemberID
        ]);

        // 会员钱包
        $wrs = DB::select('CALL sp_Front_MemberWalletAndMinerRevenue(?)', [
            $rs[0]->MemberID
        ]);

        $user = $urs[0];
        $user->Wallet = $wrs[0];

        // 登入到电子游戏
        // $url_method = env('CURL_SERVER') . '/login';
        // $data = [
        //     'user_id' => $user->MemberID
        // ];
        // $res = curl_post($url_method, json_encode($data));
        // if (isset($res['token'])) {
        //     $user->EG_token = $res['token'];
        // }

        session(['Auth' => $user]);

        return redirect('/member');
    }

}
