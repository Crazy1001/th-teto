<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {

        return view('members.index');
    }

    public function personal()
    {
        $user = session('Auth');

        return view('members.personal', compact(
            'user'
        ));
    }


}
