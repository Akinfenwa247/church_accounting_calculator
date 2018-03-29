@extends('layouts.main')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="card">
                    <div class="card-action">
                        Records
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered w3-centered table-advance table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Tithe & Offering</th>
                                    <th>National Offering</th>
                                    <th>Bank Report</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($instances as $instance)
                                @php
                                $record= \App\Record::where('date_id', $instance->date_id)->where('status',2);
                                $tithe= $record->sum('tithe');
                                $off= $record->sum('nationalOffering');
                                $br= $record->sum('bankReport');
                                $titheOff= $tithe + $off;
                                $date= \App\Date::where('id', $instance->date_id);
                                @endphp
                                <tr class="odd gradeX">
                                    <td>{{$date->value('month').' '.$date->value('year')}}</td>
                                    <td>&#8358; {{number_format($titheOff)}}</td>
                                    <td>&#8358; {{number_format($off)}}</td>
                                    <td>&#8358; {{number_format($br)}}</td>
                                    <td>
                                        <a class="w3-button w3-blue w3-margin-right" href="{{ route('accounting.show',[$instance->date_id]) }}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <div class="w3-container w3-padding-top">
            <table class="w3-table w3-bordered w3-striped w3-centered">
                <tr>
                    <th>Pending Report</th>
                </tr>
                @forelse($records as $record)
                    <tr>
                        <td><a style="cursor: pointer" onclick="document.getElementById({{$record->id}}).style.display='block'">{{\App\Branch::where('id',$record->branch_id)->value('name')}} Submitted their record &nbsp&nbsp&nbsp&nbsp <strong>{{$record->created_at->diffForHumans()}}</strong></a></td>
                    </tr>
                @empty
                    <tr>
                        <td>No pending record!</td>
                    </tr>
                @endforelse
            </table>

            @foreach($records as $record)
                <div id="{{$record->id}}" class="w3-modal">
                    <div class="w3-modal-content" style="max-width: 550px">
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
                                <input type="number" name="bankR" value="" class="w3-input w3-border">

                                <button class="btn btn-success w3-block w3-margin-top w3-margin-bottom">Confirm</button>
                            </form>
                            <form action="{{route('reject',$record->id)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger w3-block w3-margin-top w3-margin-bottom">Reject</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


@endsection