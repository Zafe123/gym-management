<?php

namespace App\Http\Controllers;


use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', ['members' => $members]);
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $member = new Member;
        $member->id = $request->input('id');
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->membership_type = $request->input('membership_type');
        $member->membership_expiration = $request->input('membership_expiration');
        $member->save();
        return redirect()->route('members.index')->with('success', 'Member created successfully.');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit', ['member' => $member]);
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->id = $request->input('id');
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->membership_expiration = $request->input('membership_expiration');
        $member->save();
        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }
}