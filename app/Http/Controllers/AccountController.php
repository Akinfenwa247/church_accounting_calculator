<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Date;
use App\Instance;
use App\Record;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches= Branch::all();
        $dates= Date::all();
        $records= Record::where('status',1)->get();
        $instances= Instance::all();
        return view('admin.index',compact('instances', 'records', 'branches', 'dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.calculate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        // iyana-ipaja
        $iyanaT= $request['iyanaT'];
        $iyanaNO= $request['iyanaNO'];
        $iyanaBr= $request['iyanaBr'];
        $iyanaLO= $request['iyanaLO'];
        $iyanaTotal= $iyanaT + $iyanaNO;
        $iyanaDiff= $iyanaBr - $iyanaTotal;

        // onihale
        $onihaleT= $request['onihaleT'];
        $onihaleNO= $request['onihaleNO'];
        $onihaleBr= $request['onihaleBr'];
        $onihaleLO= $request['onihaleLO'];
        $onihaleTotal= $onihaleT + $onihaleNO;
        $onihaleDiff= $onihaleBr - $onihaleTotal;

        // mushin
        $mushinT= $request['mushinT'];
        $mushinNO= $request['mushinNO'];
        $mushinBr= $request['mushinBr'];
        $mushinLO= $request['mushinLO'];
        $mushinTotal= $mushinT + $mushinNO;
        $mushinDiff= $mushinBr - $mushinTotal;

        // Ope-Ilu
        $opeT= $request['opeT'];
        $opeNO= $request['opeNO'];
        $opeBr= $request['opeBr'];
        $opeLO= $request['opeLO'];
        $opeTotal= $opeT + $opeNO;
        $opeDiff= $opeBr - $opeTotal;

        // pleasure
        $pleasureT= $request['pleasureT'];
        $pleasureNO= $request['pleasureNO'];
        $pleasureBr= $request['pleasureBr'];
        $pleasureLO= $request['pleasureLO'];
        $pleasureTotal= $pleasureT + $pleasureNO;
        $pleasureDiff= $pleasureBr - $pleasureTotal;

        // itele
        $iteleT= $request['iteleT'];
        $iteleNO= $request['iteleNO'];
        $iteleBr= $request['iteleBr'];
        $iteleLO= $request['iteleLO'];
        $iteleTotal= $iteleT + $iteleNO;
        $iteleDiff= $iteleBr - $iteleTotal;

        // kajola
        $kajolaT= $request['kajolaT'];
        $kajolaNO= $request['kajolaNO'];
        $kajolaBr= $request['kajolaBr'];
        $kajolaLO= $request['kajolaLO'];
        $kajolaTotal= $kajolaT + $kajolaNO;
        $kajolaDiff= $kajolaBr - $kajolaTotal;

        // Oja-odan
        $ojaT= $request['ojaT'];
        $ojaNO= $request['ojaNO'];
        $ojaBr= $request['ojaBr'];
        $ojaLO= $request['ojaLO'];
        $ojaTotal= $ojaT + $ojaNO;
        $ojaDiff= $ojaBr - $ojaTotal;

        // badagry 1
        $bad1T= $request['bad1T'];
        $bad1NO= $request['bad1NO'];
        $bad1Br= $request['bad1Br'];
        $bad1LO= $request['bad1LO'];
        $bad1Total= $bad1T + $bad1NO;
        $bad1Diff= $bad1Br - $bad1Total;

        // Badagary 2
        $bad2T= $request['bad2T'];
        $bad2NO= $request['bad2NO'];
        $bad2Br= $request['bad2Br'];
        $bad2LO= $request['bad2LO'];
        $bad2Total= $bad2T + $bad2NO;
        $bad2Diff= $bad2Br - $bad2Total;

        //ayobo
        $ayoboT= $request['ayoboT'];
        $ayoboNO= $request['ayoboNO'];
        $ayoboBr= $request['ayoboBr'];
        $ayoboLO= $request['ayoboLO'];
        $ayoboTotal= $ayoboT + $ayoboNO;
        $ayoboDiff= $ayoboBr - $ayoboTotal;

        // abeokuta
        $abeT= $request['abeT'];
        $abeNO= $request['abeNO'];
        $abeBr= $request['abeBr'];
        $abeLO= $request['abeLO'];
        $abeTotal= $abeT + $abeNO;
        $abeDiff= $abeBr - $abeTotal;

        // Mountain of Solution
        $mosT= $request['mosT'];
        $mosNO= $request['mosNO'];
        $mosBr= $request['mosBr'];
        $mosLO= $request['mosLO'];
        $mosTotal= $mosT + $mosNO;
        $mosDiff= $mosBr - $mosTotal;

        // Aramoko-Ekiti
        $araT= $request['araT'];
        $araNO= $request['araNO'];
        $araBr= $request['araBr'];
        $araLO= $request['araLO'];
        $araTotal= $araT + $araNO;
        $araDiff= $araBr - $araTotal;

        // Ikorodu 1
        $ikorodu1T= $request['ikorodu1T'];
        $ikorodu1NO= $request['ikorodu1NO'];
        $ikorodu1Br= $request['ikorodu1Br'];
        $ikorodu1LO= $request['ikorodu1LO'];
        $ikorodu1Total= $ikorodu1T + $ikorodu1NO;
        $ikorodu1Diff= $ikorodu1Br - $ikorodu1Total;

        // Ikorodu 2
        $ikorodu2T= $request['ikorodu2T'];
        $ikorodu2NO= $request['ikorodu2NO'];
        $ikorodu2Br= $request['ikorodu2Br'];
        $ikorodu2LO= $request['ikorodu2LO'];
        $ikorodu2Total= $ikorodu2T + $ikorodu2NO;
        $ikorodu2Diff= $ikorodu2Br - $ikorodu2Total;

        // Iju
        $ijuT= $request['ijuT'];
        $ijuNO= $request['ijuNO'];
        $ijuBr= $request['ijuBr'];
        $ijuLO= $request['ijuLO'];
        $ijuTotal= $ijuT + $ijuNO;
        $ijuDiff= $ijuBr - $ijuTotal;

        // Ibadan
        $ibadanT= $request['ibadanT'];
        $ibadanNO= $request['ibadanNO'];
        $ibadanBr= $request['ibadanBr'];
        $ibadanLO= $request['ibadanLO'];
        $ibadanTotal= $ibadanT + $ibadanNO;
        $ibadanDiff= $ibadanBr - $ibadanTotal;

        // Jakande
        $jakandeT= $request['jakandeT'];
        $jakandeNO= $request['jakandeNO'];
        $jakandeBr= $request['jakandeBr'];
        $jakandeLO= $request['jakandeLO'];
        $jakandeTotal= $jakandeT + $jakandeNO;
        $jakandeDiff= $jakandeBr - $jakandeTotal;

        // Mountain of Mercy to Solution
        $momsT= $request['momsT'];
        $momsNO= $request['momsNO'];
        $momsBr= $request['momsBr'];
        $momsLO= $request['momsLO'];
        $momsTotal= $momsT + $momsNO;
        $momsDiff= $momsBr - $momsTotal;

        // Adjahonore
        $adjaT= $request['adjaT'];
        $adjaNO= $request['adjaNO'];
        $adjaBr= $request['adjaBr'];
        $adjaLO= $request['adjaLO'];
        $adjaTotal= $adjaT + $adjaNO;
        $adjaDiff= $adjaBr - $adjaTotal;

        // Bayelsa
        $bayelsaT= $request['bayelsaT'];
        $bayelsaNO= $request['bayelsaNO'];
        $bayelsaBr= $request['bayelsaBr'];
        $bayelsaLO= $request['bayelsaLO'];
        $bayelsaTotal= $bayelsaT + $bayelsaNO;
        $bayelsaDiff= $bayelsaBr - $bayelsaTotal;

        $totalT= $iyanaT + $onihaleT + $mushinT + $opeT + $pleasureT + $iteleT + $kajolaT + $ojaT + $bad1T + $bad2T + $ayoboT + $abeT + $mosT + $araT + $ikorodu1T + $ikorodu2T + $ijuT + $ibadanT + $jakandeT + $momsT + $adjaT + $bayelsaT;
        $totalBr= $iyanaBr + $onihaleBr + $mushinBr + $opeBr + $pleasureBr + $iteleBr + $kajolaBr + $ojaBr + $bad1Br + $bad2Br + $ayoboBr + $abeBr + $mosBr + $araBr + $ikorodu1Br + $ikorodu2Br + $ijuBr + $ibadanBr + $jakandeBr + $momsBr + $adjaBr + $bayelsaBr;
        $totalNO= $iyanaNO + $onihaleNO + $mushinNO + $opeNO + $pleasureNO + $iteleNO + $kajolaNO + $ojaNO + $bad1NO + $bad2NO + $ayoboNO + $abeNO + $mosNO + $araNO + $ikorodu1NO + $ikorodu2NO + $ijuNO + $ibadanNO + $jakandeNO + $momsNO + $adjaNO + $bayelsaNO;
        $totalTotal= $iyanaTotal + $onihaleTotal + $mushinTotal + $opeTotal + $pleasureTotal + $iteleTotal + $kajolaTotal + $ojaTotal + $bad1Total + $bad2Total + $ayoboTotal + $abeTotal + $mosTotal + $araTotal + $ikorodu1Total + $ikorodu2Total + $ijuTotal + $ibadanTotal + $jakandeTotal + $momsTotal + $adjaTotal + $bayelsaTotal;
        $totalLO= $iyanaLO + $onihaleLO + $mushinLO + $opeLO + $pleasureLO + $iteleLO + $kajolaLO + $ojaLO + $bad1LO + $bad2LO + $ayoboLO + $abeLO + $mosLO + $araLO + $ikorodu1LO + $ikorodu2LO + $ijuLO + $ibadanLO + $jakandeLO + $momsLO + $adjaLO + $bayelsaLO;

        Record::create([
            'date'=> $request['myDate'],
            'iyanaTithe'=>$iyanaT,
            'iyanaNationalOff'=>$iyanaNO,
            'iyanaTotal'=>$iyanaTotal,
            'iyanaBankReport'=>$iyanaBr,
            'iyanaDifference'=>$iyanaDiff,
            'iyanaLocalOff'=>$iyanaLO,
            'onihaleTithe'=>$onihaleT,
            'onihaleNationalOff'=>$onihaleNO,
            'onihaleTotal'=>$onihaleTotal,
            'onihaleBankReport'=>$onihaleBr,
            'onihaleDifference'=>$onihaleDiff,
            'onihaleLocalOff'=>$onihaleLO,
            'mushinTithe'=>$mushinT,
            'mushinNationalOff'=>$mushinNO,
            'mushinTotal'=>$mushinTotal,
            'mushinBankReport'=>$mushinBr,
            'mushinDifference'=>$mushinDiff,
            'mushinLocalOff'=>$mushinLO,
            'opeiluTithe'=>$opeT,
            'opeiluNationalOff'=>$opeNO,
            'opeiluTotal'=>$opeTotal,
            'opeiluBankReport'=>$opeBr,
            'opeiluDifference'=>$opeDiff,
            'opeiluLocalOff'=>$opeLO,
            'pleasureTithe'=>$pleasureT,
            'pleasureNationalOff'=>$pleasureNO,
            'pleasureTotal'=>$pleasureTotal,
            'pleasureBankReport'=>$pleasureBr,
            'pleasureDifference'=>$pleasureDiff,
            'pleasureLocalOff'=>$pleasureLO,
            'iteleTithe'=>$iteleT,
            'iteleNationalOff'=>$iteleNO,
            'iteleTotal'=>$iteleTotal,
            'iteleBankReport'=>$iteleBr,
            'iteleDifference'=>$iteleDiff,
            'iteleLocalOff'=>$iteleLO,
            'kajolaTithe'=>$kajolaT,
            'kajolaNationalOff'=>$kajolaNO,
            'kajolaTotal'=>$kajolaTotal,
            'kajolaBankReport'=>$kajolaBr,
            'kajolaDifference'=>$kajolaDiff,
            'kajolaLocalOff'=>$kajolaLO,
            'ojaTithe'=>$ojaT,
            'ojaNationalOff'=>$ojaNO,
            'ojaTotal'=>$ojaTotal,
            'ojaBankReport'=>$ojaBr,
            'ojaDifference'=>$ojaDiff,
            'ojaLocalOff'=>$ojaLO,
            'bad1Tithe'=>$bad1T,
            'bad1NationalOff'=>$bad1NO,
            'bad1Total'=>$bad1Total,
            'bad1BankReport'=>$bad1Br,
            'bad1Difference'=>$bad1Diff,
            'bad1LocalOff'=>$bad1LO,
            'bad2Tithe'=>$bad2T,
            'bad2NationalOff'=>$bad2NO,
            'bad2Total'=>$bad2Total,
            'bad2BankReport'=>$bad2Br,
            'bad2Difference'=>$bad2Diff,
            'bad2LocalOff'=>$bad2LO,
            'ayoboTithe'=>$ayoboT,
            'ayoboNationalOff'=>$ayoboNO,
            'ayoboTotal'=>$ayoboTotal,
            'ayoboBankReport'=>$ayoboBr,
            'ayoboDifference'=>$ayoboDiff,
            'ayoboLocalOff'=>$ayoboLO,
            'abeTithe'=>$abeT,
            'abeNationalOff'=>$abeNO,
            'abeTotal'=>$abeTotal,
            'abeBankReport'=>$abeBr,
            'abeDifference'=>$abeDiff,
            'abeLocalOff'=>$abeLO,
            'mosTithe'=>$mosT,
            'mosNationalOff'=>$mosNO,
            'mosTotal'=>$mosTotal,
            'mosBankReport'=>$mosBr,
            'mosDifference'=>$mosDiff,
            'mosLocalOff'=>$mosLO,
            'araTithe'=>$araT,
            'araNationalOff'=>$araNO,
            'araTotal'=>$araTotal,
            'araBankReport'=>$araBr,
            'araDifference'=>$araDiff,
            'araLocalOff'=>$araLO,
            'ikorodu1Tithe'=>$ikorodu1T,
            'ikorodu1NationalOff'=>$ikorodu1NO,
            'ikorodu1Total'=>$ikorodu1Total,
            'ikorodu1BankReport'=>$ikorodu1Br,
            'ikorodu1Difference'=>$ikorodu1Diff,
            'ikorodu1LocalOff'=>$ikorodu1LO,
            'ikorodu2Tithe'=>$ikorodu2T,
            'ikorodu2NationalOff'=>$ikorodu2NO,
            'ikorodu2Total'=>$ikorodu2Total,
            'ikorodu2BankReport'=>$ikorodu2Br,
            'ikorodu2Difference'=>$ikorodu2Diff,
            'ikorodu2LocalOff'=>$ikorodu2LO,
            'ijuTithe'=>$ijuT,
            'ijuNationalOff'=>$ijuNO,
            'ijuTotal'=>$ijuTotal,
            'ijuBankReport'=>$ijuBr,
            'ijuDifference'=>$ijuDiff,
            'ijuLocalOff'=>$ijuLO,
            'ibadanTithe'=>$ibadanT,
            'ibadanNationalOff'=>$ibadanNO,
            'ibadanTotal'=>$ibadanTotal,
            'ibadanBankReport'=>$ibadanBr,
            'ibadanDifference'=>$ibadanDiff,
            'ibadanLocalOff'=>$ibadanLO,
            'momsTithe'=>$momsT,
            'momsNationalOff'=>$momsNO,
            'momsTotal'=>$momsTotal,
            'momsBankReport'=>$momsBr,
            'momsDifference'=>$momsDiff,
            'momsLocalOff'=>$momsLO,
            'jakandeTithe'=>$jakandeT,
            'jakandeNationalOff'=>$jakandeNO,
            'jakandeTotal'=>$jakandeTotal,
            'jakandeBankReport'=>$jakandeBr,
            'jakandeDifference'=>$jakandeDiff,
            'jakandeLocalOff'=>$jakandeLO,
            'adjaTithe'=>$adjaT,
            'adjaNationalOff'=>$adjaNO,
            'adjaTotal'=>$adjaTotal,
            'adjaBankReport'=>$adjaBr,
            'adjaDifference'=>$adjaDiff,
            'adjaLocalOff'=>$adjaLO,
            'bayelsaTithe'=>$bayelsaT,
            'bayelsaNationalOff'=>$bayelsaNO,
            'bayelsaTotal'=>$bayelsaTotal,
            'bayelsaBankReport'=>$bayelsaBr,
            'bayelsaDifference'=>$bayelsaDiff,
            'bayelsaLocalOff'=>$bayelsaLO,
            'TotalTithe'=>$totalT,
            'TotalNationalOff'=>$totalNO,
            'TotalTitheOff'=>$totalTotal,
            'TotalBankReport'=>$totalBr,
            'TotalLocalOff'=>$totalLO,
        ]);
        return redirect()->route('accounting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records= Record::where('date_id', $id)->where('status',2)->get();
        $date= Date::where('id', $id)->first();
        return view('admin.show', compact('records', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::findOrFail($id);
        return view('admin.edit', compact('record'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::findOrFail($id);
        $record->forceDelete();
        return redirect()->route('accounting.index');
    }
    public function downloadPDF($id){
        $record = Record::find($id);

        $pdf = PDF::loadView('admin.pdf', compact('record'));
        return $pdf->download('accounting.pdf');

    }
    public function user()
    {
        $branches = Branch::all();
        return view('admin.user', compact('branches'));
    }
    public  function add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user= new User();
        $user->name= $request->name;
        $user->branch_id= $request->branch;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->role= 2;
        $user->password= bcrypt($request->password);
        $user->save();
        return back()->with('status','User created successfully!');
    }

    public function editProfile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $user= User::findOrFail($request->id);
        $user->name= $request->name;
        $user->phone= $request->phone;
        if($request->has('email')){
            $user->email= $request->email;
        }
        if($request->has('branch')){
            $user->branch_id= $request->branch;
        }
        if ($request->password == !null)
        {
            $this->validate($request,[
                'password' => 'required|min:6|confirmed',
            ]);
            $user->password= bcrypt($request->password);
        }
        $user->save();
        return back()->with('status','Profile updated successfully!');
    }

    public function users()
    {
        $users= User::where('role', 2)->get();
        return view('admin.users', compact('users'));
    }
}
