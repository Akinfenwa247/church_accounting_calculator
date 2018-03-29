@extends('layouts.main')
@section('content')
<section>
    <div class="container" style="max-width:600px; padding-top: 40px">
        <div class="w3-container w3-card w3-white">
            @if (session('status'))
                <div class="alert alert-success">
                    <span class="w3-right" onclick="this.parentElement.style.display='none';"><button>&times;</button></span>
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <span class="w3-right" onclick="this.parentElement.style.display='none';"><button>&times;</button></span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3>Register User</h3>
            <form class="form-horizontal" method="POST" action="{{ route('registeruser') }}">
                {{ csrf_field() }}
                <div class="w3-margin">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="e.g Pastor John" value="{{old('name')}}" class="w3-input w3-border">
                </div>
                <div class="w3-margin">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="e.g example@gmail.com" value="{{old('email')}}" class="w3-input w3-border">
                </div>
                <div class="w3-margin">
                    <label for="phone">Phone Number</label>
                    <input type="number" id="phone" name="phone" placeholder="e.g 08166738653" value="{{old('phone')}}" class="w3-input w3-border">
                </div>
                <div class="w3-margin">
                    <label for="branch">Branch</label>
                    <select class="w3-input w3-border" name="branch" id="branch">
                        <option value="">select branch</option>
                        @foreach($branches as $branch)
                            <option @if(old('branch') == $branch->id) selected @endif value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w3-margin">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" class="w3-input w3-border">
                </div>
                <div class="w3-margin">
                    <label for="password">Confirm Password</label>
                    <input type="text" id="password" name="password_confirmation" class="w3-input w3-border">
                </div>
                <div class="w3-margin">
                    <button class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection