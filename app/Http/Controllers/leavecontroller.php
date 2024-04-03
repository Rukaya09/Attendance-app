<?php

namespace App\Http\Controllers;
use App\Models\leavemodel;
use Illuminate\Http\Request;
class leavecontroller extends Controller
{
    public function create()
    {
        return view('role.leave');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'description' => 'required|description|:leave',
        //     'leavetype' => 'required',
        //     'is_approved' => 'required',
        //     'userprofile_id' => 'required|exists:userprofile,id',
        // ]);

        leavemodel::create($request->all());

        return redirect()->route('leave')
            ->with('success', 'User created successfully.');
    }



}
