<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    public function index()
    {
        $business = DB::select('CALL sp_Front_CommodityList');


        return view('business.index', compact('business'));
    }

    public function buyItem(Request $request)
    {
        $user = session('Auth');

        $rs = DB::select('CALL sp_Front_MemberDeposit(?,?,?)', [
            $user->MemberID,
            $request->id,
            now()
        ]);

        return  $rs;

        if ($rs[0]->ResultCode == 0) {
            // 会员钱包
            $wrs = DB::select('CALL sp_Front_MemberWalletAndMinerRevenue(?)', [
                $user->MemberID
            ]);

            return response(['message' => $wrs[0] ], 400);

            $user->Wallet = $wrs[0];
            session(['Auth' => $user]);

            return response(['message' => '完成' ], 200);
        }
        if ($rs[0]->ResultCode == 1) {
            return response(['message' => '沒有購買次數'], 422);
        }
        if ($rs[0]->ResultCode == 2) {
            return response(['message' => '會員不存在'], 422);
        }
        if ($rs[0]->ResultCode == 3) {
            return response(['message' => '商品不存在'], 422);
        }


        return response(['message' => '資料錯誤'], 400);

    }

    public function addCart(Request $request)
    {
        $business = DB::select('CALL sp_Front_CommodityList');
        $item = [];
        foreach($business as $row) {
            if ($row->CommodityID == $request->id) {
                $item = $row;
                break;
            }
        }

        if ($item) {

            $text = '';
            if ($item->GoldCoin > 0) {
                $text = $item->GoldCoin / 1000;
            } elseif ($item->SilverCoin > 0) {
                $text = $item->SilverCoin / 1000;
            } elseif ($item->ActivityCoin > 0) {
                $text = $item->ActivityCoin / 1000;
            }


            $cartItem = [
                'CommodityID' => $item->CommodityID,
                'CommodityName' => $item->CommodityName,
                'CommodityPrice' => $item->CommodityPrice / 1000,
                'text' => $text
            ];

            $total = $cartItem['CommodityPrice'];

            if ($request->session()->has('carts')) {
                $carts = session('carts');
                $carts['total'] += $total;
                $carts['items'][] = $cartItem;

            } else {
                $carts['items'][] = $cartItem;
                $carts['total'] = $total;
            }

        } else {
            return response(['message' => 'Data error'], 404);
        }

        session(['carts' => $carts]);

        return json_encode(session('carts'));
    }

    public function clearCart()
    {
        session()->forget('carts');

        return redirect('/business');
    }

}
