<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EGameController extends Controller
{
    //選擇廠商畫面
    public function selectGame()
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

        return view('pages.selectgame', compact('games', 'CoinType'));
    }


    //取得WG遊戲列表
    public function wg_List()
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


    //WG: 進入遊戲
    public function wg_Game(Request $request, $id)
    {
        // echo $request->coin . '<br>';
        
        $errors = [];

        $user = session('Auth');
        if ($request->coin == 0 || null || ''){
            $errors = ['message' => '請填入金額'];
            return redirect('/wg_list')
                ->withErrors($errors)
                ->withInput();
        }else{
            if ($request->playLeave == 'play') {
                $url_server = env('CURL_SERVER');
                
                // 先進行登入
                $url_method = $url_server . '/login';
                $data = [
                    'user_id' => $user->MemberID
                ];
                $res = curl_post($url_method, json_encode($data));

                //取得錢包餘額並在WG端寫入會員資料
                $url_method = $url_server . '/wg/user/wallet/remote?language=zhCN&token=' . $res['token'];
                $data = [];
                $response = curl_get($url_method, json_encode($data));


                $rs = DB::select('CALL sp_Front_Game_PlayGame(?,?,?,?,?)', [
                    $user->MemberID,
                    $id,
                    $request->coinType,
                    intval($request->coin) * 1000,
                    now()
                ]);

                // 進入遊戲
                $url_method = $url_server . '/wg/game/' . $id . '/login?language=zhCN&token='.$res['token'];
                $data = [
                    'return_url' => 'http://demo.gpg-game.com/wg_list',
                    'point'      => $request->coin,
                    'wallet'     => $user->Wallet
                ];
            
                $rs_data = curl_post($url_method, json_encode($data));

                if (isset($rs_data['login_url'])) {
                    return redirect($rs_data['login_url']);
        
                } else {
                    $errors = ['message' => '遊戲目前維護中'];
                    return redirect('/wg_list')
                        ->withErrors($errors)
                        ->withInput();
                }
//==========================//
            } else {
                $rs = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?)', [
                    $user->MemberID,
                    $id,
                    $request->coinType,
                    intval($request->coin) * 1000,
                    now()
                ]);

                //取得會員下注紀錄
                $url_server = env('CURL_SERVER');

                $url_method = $url_server . '/game/report/user?zone=vaNTD';
                
                $data = [
                    'user_name'  => $user->MemberAccount,
                ];
            
                $rs_data = curl_post($url_method, json_encode($data));

                //將下注紀錄用預存程序寫進資料庫
                if (isset($rs_data)){
                    if ($rs_data['sequence_number'] != '' && $rs_data['sequence_id'] != ''){
                        $response = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?,?,?,?,?,?)', [
                            $user->MemberID,
                            $id,
                            $rs_data['sequence_number'],
                            $rs_data['sequence_id'],
                            $request->coinTypeID,
                            $rs_data['bet'],
                            $rs_data['win_lose'],
                            $rs_data['pay_out'],
                            $rs_data['contribution'],
                            $rs_data['create_time'],
                        ]);

                        if ($response[0]->ResultCode == 0) {
                            $errors = ['message' => 'OK'];

                            return redirect('/wg_list')
                                ->withErrors($errors)
                                ->withInput();
                        }else{
                            $errors = ['message' => '退出遊戲程序錯誤'];
                            
                            return redirect('/wg_list')
                                ->withErrors($errors)
                                ->withInput();   
                        }
                    }
                
                    // elseif ($rs_data['sequence_number'] == '' && $rs_data['sequence_id'] == ''){
                    //     $response = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?,?,?,?,?,?)', [
                    //         $user->MemberID,
                    //         $id,
                    //         '',
                    //         '',
                    //         $request->coinTypeID,
                    //         $rs_data['bet'],
                    //         $rs_data['win_lose'],
                    //         $rs_data['pay_out'],
                    //         $rs_data['contribution'],
                    //         $rs_data['create_time'],
                    //     ]);

                    //     if ($response[0]->ResultCode == 0) {
                    //         $errors = ['message' => 'OK'];

                    //         return redirect('/wg_list')
                    //             ->withErrors($errors)
                    //             ->withInput();
                    //     }else{
                    //         $errors = ['message' => '退出遊戲程序錯誤'];
                            
                    //         return redirect('/wg_list')
                    //             ->withErrors($errors)
                    //             ->withInput();   
                    //     }
                    // }
                    else{
                        $errors = ['message' => '退出遊戲程序錯誤'];
                            
                        return redirect('/wg_list')
                            ->withErrors($errors)
                            ->withInput();  
                    }
                }else{
                    $errors = ['message' => '退出遊戲程序錯誤'];
                            
                    return redirect('/wg_list')
                        ->withErrors($errors)
                        ->withInput();  
                }
            }
        }
        
        $errors = [];
        if ($rs[0]->ResultCode != 0) {
            if ($rs[0]->ResultCode == 1) {
                $errors = ['message' => '會員不存在'];
            }
            if ($rs[0]->ResultCode == 2) {
                $errors = ['message' => '遊戲不存在'];
            }
            if ($rs[0]->ResultCode == 3) {
                $errors = ['message' => '幣別不存在'];
            }
            if ($rs[0]->ResultCode == 4) {
                $errors = ['message' => '餘額異常不存在'];
            }
            if ($rs[0]->ResultCode == 5) {
                $errors = ['message' => '金幣不夠'];
            }
            if ($rs[0]->ResultCode == 6) {
                $errors = ['message' => '銀幣不夠'];
            }
            if ($rs[0]->ResultCode == 7) {
                $errors = ['message' => '活動幣不夠'];
            }
            if ($rs[0]->ResultCode == 8) {
                $errors = ['message' => '還在遊戲中'];
            }
            if ($rs[0]->ResultCode == 9) {
                $errors = ['message' => '交易失敗'];
            }

            return redirect('/wg_list')
                    ->withErrors($errors)
                    ->withInput();

        }
    }


    //取得VA遊戲列表
    public function va_List()
    {
        $user = session('Auth');
        
        $url_server = env('CURL_SERVER');

        // 先進行登入
        $url_method = $url_server . '/login';
        $data = [
            'user_id' => $user->MemberID
        ];
        $res = curl_post($url_method, json_encode($data));
        
        //取得錢包餘額並在WG端寫入會員資料
        $url_method = $url_server . '/wg/user/wallet/remote?language=zhCH&token=' . $res['token'];
        $data = [];
        $response = curl_get($url_method, json_encode($data));
        
        //取得遊戲列表
        $url_method = $url_server . '/wg/game/?language=zhCH&token=' . $res['token'];
        $data = [];

        $games = curl_get($url_method, json_encode($data));
        
        // for ($item=0;$item<$i;$item++){
        //     $games = $game[$item];
        // };
        
        $games = json_decode(json_encode($games));
        $CoinType = DB::select('CALL sp_General_CoinTypeMenu');
        
        // 会员钱包
        $wrs = DB::select('CALL sp_Front_MemberWalletAndMinerRevenue(?)', [
            $user->MemberID
        ]);
        $user->Wallet = $wrs[0];
        session(['Auth' => $user]);

        return view('pages.va_game', compact('games', 'CoinType'));
    }


    //VA: 進入遊戲
    public function va_Game(Request $request, $id)
    {
        echo $request->coin . '<br>';
        
        $errors = [];

        $user = session('Auth');
        if ($request->coin == 0 || null || ''){
            $errors = ['message' => '請填入金額'];
            return redirect('/va_list')
                ->withErrors($errors)
                ->withInput();
        }else{        
            if ($request->playLeave == 'play') {
                $url_server = env('CURL_SERVER');
                
                // 先進行登入
                $url_method = $url_server . '/login';
                $data = [
                    'user_id' => $user->MemberID
                ];
                $res = curl_post($url_method, json_encode($data));

                //取得錢包餘額並在WG端寫入會員資料
                $url_method = $url_server . '/wg/user/wallet/remote?language=zhCH&token=' . $res['token'];
                $data = [];
                $response = curl_get($url_method, json_encode($data));


                $rs = DB::select('CALL sp_Front_Game_PlayGame(?,?,?,?,?)', [
                    $user->MemberID,
                    $id,
                    $request->coinType,
                    intval($request->coin) * 1000,
                    now()
                ]);

                // 進入遊戲
                $url_method = $url_server . '/wg/game/' . $id . '/login?language=zhCH&token='.$res['token'];
                $data = [
                    'return_url' => 'http://demo.gpg-game.com/va_list',
                    'point'      => $request->coin,
                    'wallet'     => $user->Wallet
                ];
            
                $rs_data = curl_post($url_method, json_encode($data));
            

                if (isset($rs_data['login_url'])) {
                    return redirect($rs_data['login_url']);
        
                } else {
                    $errors = ['message' => '遊戲目前維護中'];
                    return redirect('/va_list')
                        ->withErrors($errors)
                        ->withInput();
                }
//=======================//
            } else {
                //退出遊戲
                $rs = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?)', [
                    $user->MemberID,
                    $id,
                    $request->coinType,
                    intval($request->coin),
                    now()
                ]);
                
                //取得會員下注紀錄
                $url_server = env('CURL_SERVER');

                $url_method = $url_server . '/game/report/user?zone=vaNTD';
                
                $data = [
                    'user_name'  => $user->MemberAccount,
                ];
            
                $rs_data = curl_post($url_method, json_encode($data));

                //將下注紀錄用預存程序寫進資料庫
                $response = DB::select('CALL sp_Front_Game_LeaveGame(?,?,?,?,?,?,?,?,?,?)', [
                    $user->MemberID,
                    $id,
                    $rs_data['sequence_number'],
                    $rs_data['sequence_id'],
                    $request->coinTypeID,
                    $rs_data['bet'],
                    $rs_data['win_lose'],
                    $rs_data['pay_out'],
                    $rs_data['contribution'],
                    $rs_data['create_time'],
                ]);

                if ($response[0]->ResultCode == 0) {
                    $errors = ['message' => 'OK'];

                    return redirect('/va_list')
                        ->withErrors($errors)
                        ->withInput();
                }else{
                    $errors = ['message' => '退出遊戲程序錯誤'];
                    
                    return redirect('/va_list')
                        ->withErrors($errors)
                        ->withInput(); 
                }
            }
        }    
    }
}