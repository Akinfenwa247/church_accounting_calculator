<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Date;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branchs= Branch::all();
        return view('admin.branch.index', compact('branchs'));
    }

    public function create(Request $request)
    {
        if ($request->has('id'))
        {
            $branch= Branch::find($request->id);
        }else{
            $branch= new Branch();
        }
        $branch->name= $request->name;
        $branch->address= $request->address;
        $branch->phone= $request->phone;
        $branch->save();

        return back()->with('status', 'Branch created successfully');
    }

    public function send()
    {
        $dates= Date::all();
        return view('branch.index', compact( 'dates'));
    }
}
