@extends('layouts.main')
@section('content')

    <div class="w3-margin-left" style="padding-top: 30px">
        <a class="btn btn-success" href="{{ route('accounting.index')}}" ><i class="fa fa-mail-reply"></i> Back</a>
        <button name="b_print" class="btn btn-primary"   onClick="printdiv('div_print');"><i class="fa fa-print"></i> Print </button>
    </div>
    <div class="w3-container" id="div_print">
        <div>
            <h2>{{$date->month.' '.$date->year}} Financial Report</h2>
        </div>
        <div class="table-responsive">
            <table class="">
                @php
                    $record= \App\Record::where('date_id', $date->id)->where('status',2);
                    $tithe= $record->sum('tithe');
                    $off= $record->sum('nationalOffering');
                    $br= $record->sum('bankReport');
                    $titheOff= $tithe + $off;
                    $diff= $br - $titheOff;
                    $local= $record->sum('localOffering')
                @endphp
                <thead>
                <tr>
                    <th></th>
                    <th>Branch</th>
                    <th>Tithe</th>
                    <th>National Offering</th>
                    <th>Total Tithe & Offering</th>
                    <th>Bank Report</th>
                    <th>Difference</th>
                    <th>Local Offering</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $count = 1
                @endphp
                @foreach($records as $record)
                <tr>
                    <td>{{$count++}}</td>
                    <td><a style="cursor: pointer" onclick="document.getElementById({{$record->id}}).style.display='block'">{{\App\Branch::where('id', $record->branch_id)->value('name')}}</a></td>
                    <td>&#8358; {{number_format($record->tithe)}}</td>
                    <td>&#8358; {{number_format($record->nationalOffering)}}</td>
                    <td>&#8358; {{number_format($record->tithe + $record->nationalOffering)}}</td>
                    <td>&#8358; {{number_format($record->bankReport)}}</td>
                    <td>&#8358; {{number_format($record->bankReport - ($record->tithe + $record->nationalOffering))}}</td>
                    <td>&#8358; {{number_format($record->localOffering)}}</td>
                </tr>
                @endforeach
                <tr>
                    <th></th>
                    <th>TOTAL</th>
                    <th>&#8358; {{number_format($tithe)}}</th>
                    <th>&#8358; {{number_format($off)}}</th>
                    <th>&#8358; {{number_format($titheOff)}}</th>
                    <th>&#8358; {{number_format($br)}}</th>
                    <th>&#8358; {{number_format($diff)}}</th>
                    <th>&#8358; {{number_format($local)}}</th>
                </tr>
                </tbody>
            </table>
            <h6 align="right" style="font-size: 10px; font-style: italic">Developed by Sam Global Technologies</h6>
        </div>
    </div>

    @php
    $dates= \App\Date::all();
    $branches= \App\Branch::all();
    @endphp
    @foreach($records as $record)
        <div id="{{$record->id}}" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom" style="max-width: 550px">
                <div class="w3-container">
                            <span onclick="document.getElementById({{$record->id}}).style.display='none'"
                                  class="w3-button w3-display-topright">&times;</span>
                    <form method="post" action="{{route('calculate')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$record->id}}">
                        <label class="w3-margin-top">Branch</label>
                        <select name="branch" class="w3-input w3-padding w3-border">
                            <option value="{{old('branch')}}">{{\App\Branch::where('id', old('branch'))->value('name')}}</option>
                            @foreach($branches as $branch)
                                <option @if($record->branch_id == $branch->id) selected @endif value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>

                        <label class="w3-margin-top">Date</label>
                        <select name="date" class="w3-input w3-padding w3-border">
                            @foreach($dates as $date)
                                <option value="{{$date->id}}" @if($record->date_id == $date->id) selected @endif>{{$date->month.', '.$date->year}}</option>
                            @endforeach
                        </select>

                        <label class="w3-margin-top">Tithe</label>
                        <input type="number" name="tithe" value="{{$record->tithe}}" class="w3-input w3-border">

                        <label class="w3-margin-top">National Offering</label>
                        <input type="number" name="nationalOff" value="{{$record->nationalOffering}}" class="w3-input w3-border">

                        <label class="w3-margin-top">Local Offering</label>
                        <input type="number" name="localOff" value="{{$record->localOffering}}" class="w3-input w3-border">

                        <label class="w3-margin-top">Bank Report</label>
                        <input type="number" name="bankR" value="{{$record->bankReport}}" class="w3-input w3-border">

                        <button class="btn btn-success w3-block w3-margin-top w3-margin-bottom">Update</button>
                    </form>
                    <form action="{{route('reject',$record->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger w3-block w3-margin-top w3-margin-bottom">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach




@endsection