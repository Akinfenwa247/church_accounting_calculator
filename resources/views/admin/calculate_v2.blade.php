@extends('layouts.main')
@section('content')
<section>
    <div class="container" style="max-width: 600px; padding-top: 40px">
        <div class=" w3-padding w3-card w3-white">
            <h3>Calculate Branch Record</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="post" action="{{route('calculate')}}">
                {{ csrf_field() }}
                <label class="w3-margin-top">Branch</label>
                <select name="branch" class="w3-input w3-padding w3-border">
                    <option value="{{old('branch')}}">{{\App\Branch::where('id', old('branch'))->value('name')}}</option>
                    @foreach($branches as $branch)
                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                    @endforeach
                </select>

                <label class="w3-margin-top">Date</label>
                <select name="date" class="w3-input w3-padding w3-border">
                    @foreach($dates as $date)
                        <option value="{{$date->id}}" @if(old('date') == $date->id) selected @endif>{{$date->month.', '.$date->year}}</option>
                    @endforeach
                </select>

                <label class="w3-margin-top">Tithe</label>
                <input type="number" name="tithe" value="{{old('tithe')}}" class="w3-input w3-border">

                <label class="w3-margin-top">National Offering</label>
                <input type="number" name="nationalOff" value="{{old('nationalOff')}}" class="w3-input w3-border">

                <label class="w3-margin-top">Local Offering</label>
                <input type="number" name="localOff" value="{{old('localOff')}}" class="w3-input w3-border">

                <label class="w3-margin-top">Bank Report</label>
                <input type="number" name="bankR" value="{{old('bankR')}}" class="w3-input w3-border">

                <button class="w3-button w3-blue w3-block w3-margin-top">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection