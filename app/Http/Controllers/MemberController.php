<?php

namespace App\Http\Controllers;


use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function create(Request $request)
    {

        $member = new member;
        $member->name = $request->name;
        $member->save();
    }

}