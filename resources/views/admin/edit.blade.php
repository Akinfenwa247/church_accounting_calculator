@extends('layouts.main')
@section('content')

    <div class="w3-container">
        <div>
            <h2>{{$record->date}} Financial Report</h2>
        </div>
        <div class="table-responsive">
            <table class="">
                <thead>
                <tr>
                    <th></th>
                    <th>Branch</th>
                    <th>Tithe</th>
                    <th>National Offering</th>
                    <th>Total Tithe $ Offering</th>
                    <th>Bank Slip</th>
                    <th>Difference</th>
                    <th>Local Offering</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Iyana-Ipaja</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iyanaLocalOff)}}</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>Onihale</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->onihaleLocalOff)}}</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Mushin</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mushinLocalOff)}}</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>Ope-Ilu</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->opeiluLocalOff)}}</td>

                </tr>
                <tr>
                    <td>5</td>
                    <td>Pleasure</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->pleasureLocalOff)}}</td>

                </tr>
                <tr>
                    <td>6</td>
                    <td>Itele</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->iteleLocalOff)}}</td>

                </tr>
                <tr>
                    <td>7</td>
                    <td>Kajola</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->kajolaLocalOff)}}</td>

                </tr>
                <tr>
                    <td>8</td>
                    <td>Oja-odan</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ojaLocalOff)}}</td>

                </tr>
                <tr>
                    <td>9</td>
                    <td>Badagry 1</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1Tithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1NationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1Total)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1BankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1Difference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad1LocalOff)}}</td>

                </tr>
                <tr>
                    <td>10</td>
                    <td>Badagry 2</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2Tithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2NationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2Total)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2BankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2Difference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bad2LocalOff)}}</td>

                </tr>
                <tr>
                    <td>11</td>
                    <td>Ayobo</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ayoboLocalOff)}}</td>

                </tr>
                <tr>
                    <td>12</td>
                    <td>Abeokuta</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->abeLocalOff)}}</td>

                </tr>
                <tr>
                    <td>13</td>
                    <td>Mountain of Solution</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->mosLocalOff)}}</td>

                </tr>
                <tr>
                    <td>14</td>
                    <td>Aramoko-Ekiti</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->araLocalOff)}}</td>

                </tr>
                <tr>
                    <td>15</td>
                    <td>Ikorodu 1</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1Tithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1NationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1Total)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1BankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1Difference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu1LocalOff)}}</td>

                </tr>
                <tr>
                    <td>16</td>
                    <td>Ikorodu 2</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2Tithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2NationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2Total)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2BankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2Difference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ikorodu2LocalOff)}}</td>

                </tr>
                <tr>
                    <td>17</td>
                    <td>Iju</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ijuLocalOff)}}</td>

                </tr>
                <tr>
                    <td>18</td>
                    <td>Ibadan</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->ibadanLocalOff)}}</td>

                </tr>
                <tr>
                    <td>19</td>
                    <td>Jakande</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->jakandeLocalOff)}}</td>

                </tr>
                <tr>
                    <td>20</td>
                    <td>Mountain of Mercy to Solution</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->momsLocalOff)}}</td>

                </tr>
                <tr>
                    <td>21</td>
                    <td>Adjahonore</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->adjaLocalOff)}}</td>

                </tr>
                <tr>
                    <td>22</td>
                    <td>Bayelsa</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaTithe)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaNationalOff)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaTotal)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaBankReport)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaDifference)}}</td>
                    <td><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->bayelsaLocalOff)}}</td>

                </tr>
                <tr>
                    <th></th>
                    <th>Total</th>
                    <th><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->TotalTithe)}}</th>
                    <th><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->TotalNationalOff)}}</th>
                    <th><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->TotalTitheOff)}}</th>
                    <th><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->TotalBankReport)}}</th>
                    <th></th>
                    <th><img style="margin-top: -7px; margin-right: 2px" src="{{asset('img/naira.png')}}"/>{{number_format($record->TotalLocalOff)}}</th>
                </tr>
                </tbody>
            </table>
            <h6 align="right" style="font-size: 10px; font-style: italic">Developed by Sam Global Technologies</h6>
        </div>
    </div>
@endsection