<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MemberInfoController extends Controller
{
    public function store(Request $request)
    {
        $rs = DB::select('CALL sp_Front_MemberInformationDetail(?)', [
            $request->id
        ]);

        return $rs;
    }
}
