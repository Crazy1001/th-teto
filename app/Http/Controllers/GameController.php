<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        $user = session('Auth');

        // dd(session('Auth'));
        $games = DB::select('CALL sp_Front_GameList');
        $CoinType = DB::select('CALL sp_General_CoinTypeMenu');

        // 会员钱包
        $wrs = DB::select('CALL sp_Front_MemberWalletAndMinerRevenue(?)', [
            $user->MemberID
        ]);
        $user->Wallet = $wrs[0];
        session(['Auth' => $user]);

        return view('pages.game', compact('games', 'CoinType'));
    }


    public function game(Request $request, $id)
    {
        echo $request->coin . '<br>';

        $user = session('Auth');
        if ($request->playLeave == 'play') {
            $rs = DB::select('CALL sp_Front_Game_PlayGame(?,?,?,?,?)', [
                $user->MemberID,
                $id,
                $request->coinType,
                intval($request->coin) * 1000,
                now()
            ]);
        } else {
            $rs = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?)', [
                $user->MemberID,
                $id,
                $request->coinType,
                intval($request->coin) * 1000,
                now()
            ]);
        }

        $errors = [];
        if ($rs[0]->ResultCode != 0) {
            if ($rs[0]->ResultCode == 1) {
                $errors = ['message' => __('會員不存在')];
            }
            if ($rs[0]->ResultCode == 2) {
                $errors = ['message' => __('遊戲不存在')];
            }
            if ($rs[0]->ResultCode == 3) {
                $errors = ['message' => __('幣別不存在')];
            }
            if ($rs[0]->ResultCode == 4) {
                $errors = ['message' => __('餘額異常不存在')];
            }
            if ($rs[0]->ResultCode == 5) {
                $errors = ['message' => __('金幣不夠')];
            }
            if ($rs[0]->ResultCode == 6) {
                $errors = ['message' => __('銀幣不夠')];
            }
            if ($rs[0]->ResultCode == 7) {
                $errors = ['message' => __('活動幣不夠')];
            }
            if ($rs[0]->ResultCode == 8) {
                $errors = ['message' => __('還在遊戲中')];
            }
            if ($rs[0]->ResultCode == 9) {
                $errors = ['message' => __('交易失敗')];
            }

            return redirect('/wg_list')
                    ->withErrors($errors)
                    ->withInput();

        }

        $errors = ['message' => 'OK'];

        return redirect('/wg_list')
                    ->withErrors($errors)
                    ->withInput();
    }
//
}
