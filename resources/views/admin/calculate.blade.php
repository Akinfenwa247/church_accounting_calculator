@extends('layouts.main')
@section('content')
    <div class="w3-container">
        <form action="{{route('accounting.store')}}" method="post">
            {{csrf_field()}}
            <div>
                <h2>Financial Report Calculator</h2>
            </div>
            <div align="center">
                <div class="container">
                    <label>Date:</label>
                    <input class="w3-border" id="date" type="text" name="myDate" style="height: 30px; padding:4px 0 0 10px" required/>
                </div>
                <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src="{{asset('js/monthpicker.min.js')}}"></script>
                <script>
                    $('#date').Monthpicker({
                        monthLabels: ["January", "February", "March", "April", "May", "June", "Juily", "August", "September", "October", "November", "December"],
                        });
                </script>
            </div>


            <table class="w3-table w3-border w3-bordered-black table-bordered">
                <tr class="w3-dark-gray w3-centered">
                    <th></th>
                    <th>Branch</th>
                    <th>Tithe</th>
                    <th>National Offering</th>
                    <th>Bank Report</th>
                    <th>Local Offering</th>
                </tr>
                <tr>
                    <th>1.</th>
                    <th>Iyana-Ipaja</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iyanaT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iyanaNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iyanaBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iyanaLO" ></td>
                </tr>
                <tr>
                    <th>2.</th>
                    <th>Onihale</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="onihaleT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="onihaleNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="onihaleBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="onihaleLO" ></td>
                </tr>
                <tr>
                    <th>3.</th>
                    <th>Mushin</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mushinT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mushinNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mushinBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mushinLO" ></td>
                </tr>
                <tr>
                    <th>4.</th>
                    <th>Ope-Ilu</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="opeT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="opeNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="opeBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="opeLO" ></td>
                </tr>
                <tr>
                    <th>5.</th>
                    <th>Pleasure</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="pleasureT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="pleasureNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="pleasureBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="pleasureLO" ></td>
                </tr>
                <tr>
                    <th>6.</th>
                    <th>Itele</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iteleT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iteleNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iteleBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="iteleLO" ></td>
                </tr>
                <tr>
                    <th>7.</th>
                    <th>Kajola</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="kajolaT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="kajolaNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="kajolaBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="kajolaLO" ></td>
                </tr>
                <tr>
                    <th>8.</th>
                    <th>Oja-odan</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ojaT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ojaNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ojaBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ojaLO" ></td>
                </tr>
                <tr>
                    <th>9.</th>
                    <th>Badagry 1</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad1T"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad1NO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad1Br"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad1LO" ></td>
                </tr>
                <tr>
                    <th>10.</th>
                    <th>Badagry 2</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad2T"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad2NO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad2Br"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bad2LO" ></td>
                </tr>
                <tr>
                    <th>11.</th>
                    <th>Ayobo</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ayoboT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ayoboNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ayoboBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ayoboLO" ></td>
                </tr>
                <tr>
                    <th>12.</th>
                    <th>Abeokuta</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="abeT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="abeNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="abeBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="abeLO" ></td>
                </tr>
                <tr>
                    <th>13.</th>
                    <th>Mountain of Solution</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mosT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mosNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mosBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="mosLO" ></td>
                </tr>
                <tr>
                    <th>14.</th>
                    <th>Aramoko-Ekiti</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="araT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="araNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="araBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="araLO" ></td>
                </tr>
                <tr>
                    <th>15.</th>
                    <th>Ikorodu 1</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu1T"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu1NO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu1Br"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu1LO" ></td>
                </tr>
                <tr>
                    <th>16.</th>
                    <th>Ikorodu 2</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu2T"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu2NO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu2Br"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ikorodu2LO" ></td>
                </tr>
                <tr>
                    <th>17.</th>
                    <th>Iju</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ijuT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ijuNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ijuBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ijuLO" ></td>
                </tr>
                <tr>
                    <th>18.</th>
                    <th>Ibadan</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ibadanT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ibadanNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ibadanBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="ibadanLO" ></td>
                </tr>
                <tr>
                    <th>19.</th>
                    <th>Jakande</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="jakandeT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="jakandeNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="jakandeBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="jakandeLO" ></td>
                </tr>
                <tr>
                    <th>20.</th>
                    <th>Mountain of Mercy to Solution</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="momsT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="momsNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="momsBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="momsLO" ></td>
                </tr>
                <tr>
                    <th>21.</th>
                    <th>Adjahonore</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="adjaT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="adjaNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="adjaBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="adjaLO" ></td>
                </tr>
                <tr>
                    <th>22.</th>
                    <th>Bayelsa</th>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bayelsaT"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bayelsaNO"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bayelsaBr"></td>
                    <td><input class="w3-input w3-border w3-light-grey" type="number" name="bayelsaLO" ></td>
                </tr>
                <tr class="w3-dark-gray">
                    <th></th>
                    <th>Branch</th>
                    <th>Tithe</th>
                    <th>National Offering</th>
                    <th>Bank Report</th>
                    <th>Local Offering</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="center">
                        <button class="btn btn-success btn-block">Submit</button></th>
                </tr>
            </table>
        </form>


    </div>
    @endsection