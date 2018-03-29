<!DOCTYPE html>
<html>
<title>Send Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/w3.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<style>
    body{
        background-image: url("img/green_pasture.jpg");
    }
</style>
<body>
<section>
    <div class="w3-bar w3-padding">
        <div class=" w3-bar-item w3-right btn-group btn-group">
            <a href="{{url('/logout')}}" class="btn btn-primary ">Logout</a>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                Edit Profile
            </button>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ route('editProfile') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{Auth::id()}}">
                            <div class="w3-margin">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="e.g Pastor John" value="{{Auth::user()->name}}" class="w3-input w3-border">
                            </div>
                            <div class="w3-margin">
                                <label for="phone">Phone Number</label>
                                <input type="number" id="phone" name="phone" placeholder="e.g 08166738653" value="{{Auth::user()->phone}}" class="w3-input w3-border">
                            </div>
                            <hr>
                            <h3>Change Password</h3>
                            <div class="w3-margin">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="w3-input w3-border">
                            </div>
                            <div class="w3-margin">
                                <label for="password">Confirm Password</label>
                                <input type="password" id="password" name="password_confirmation" class="w3-input w3-border">
                            </div>
                            <div class="w3-margin">
                                <button class="btn btn-success btn-block">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container" style="max-width: 600px; margin-top: 40px">
        <h1 align="center" class="w3-text-white" style="text-shadow:2px 2px 0 #444">{{\App\Branch::where('id', Auth::user()->branch_id)->value('name')}}</h1>
        <div class="w3-container w3-card w3-white">
            @if (session('status'))
                <div class="alert alert-success">
                    <span class="w3-right" onclick="this.parentElement.style.display='none';"><button>&times;</button></span>
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    <span class="w3-right" onclick="this.parentElement.style.display='none';"><button>&times;</button></span>
                    {{ session('error') }}
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
            <h3>Send Report</h3>
            <form method="post" action="{{route('calculate')}}">
                {{ csrf_field() }}
                <input type="hidden" name="branch" value="{{Auth::user()->branch_id}}">
                <label class="w3-margin-top">Date</label>
                <select name="date" class="w3-input w3-padding w3-border">
                    <option value="">Select date</option>
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

                <button class="w3-button w3-green w3-block w3-margin-bottom w3-margin-top">Submit</button>
            </form>
        </div>

    </div>
</section>
</body>
</html>
