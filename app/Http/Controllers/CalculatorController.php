<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Date;
use App\Instance;
use App\Month;
use App\Record;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculatorController extends Controller
{
    public function index()
    {
        $branches= Branch::all();
        $dates= Date::all();
        return view('admin.calculate_v2', compact('branches', 'dates'));
    }

    public function calculate(Request $request)
    {
        if ($request->has('id')){
            $record= Record::find($request->id);
        }else{
            $record= new Record();
        }
        $record->branch_id = $request->branch;
        $record->date_id= $request->date;
        $record->tithe= $request->tithe;
        $record->nationalOffering= $request->nationalOff;
        $record->localOffering= $request->localOff;
        if($request->bankR ==!null)
        {
            $record->bankReport= $request->bankR;
            $record->status= 2;
        }else{
            $record->status= 1;
        }

        $record->save();
        if(Auth::user()->role == 1)
        {
            $date= Instance::where('date_id', $request->date)->exists();
            if(!$date)
            {
                $instance = new Instance();
                $instance->date_id = $request->date;
                $instance->save();
            }
            return back()->with('status', 'Calculation Processed!');
        }
        return back()->with('status', 'Sent Successfully!');
    }

    public function reject($id)
    {
        $record= Record::find($id);
        $record->delete();
        return back();
    }
}
