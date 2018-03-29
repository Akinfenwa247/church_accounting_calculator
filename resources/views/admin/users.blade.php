@extends('layouts.main')
@section('content')
    <section>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-advance table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach($users as $user)

                                    <tr class="odd gradeX">
                                        <td>{{$count++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{\App\Branch::where('id', $user->branch_id)->value('name')}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <button type="button" class="btn btn-success" onclick="document.getElementById({{$user->id}}).style.display='block'">
                                                Edit User
                                            </button>
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
    </section>

    @foreach($users as $user)
    <!-- The Modal -->
    <div id="{{$user->id}}" class="w3-modal">
        <div class="w3-modal-content" style="max-width: 550px">
            <div class="w3-container">
      <span onclick="document.getElementById({{$user->id}}).style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
                <form class="form-horizontal" method="POST" action="{{ route('editProfile') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="w3-margin">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="e.g Pastor John" value="{{$user->name}}" class="w3-input w3-border">
                    </div>
                    <div class="w3-margin">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" name="phone" placeholder="e.g 08166738653" value="{{$user->phone}}" class="w3-input w3-border">
                    </div>
                    <div class="w3-margin">
                        <label for="phone">Email</label>
                        <input type="email" id="email" name="email" value="{{$user->email}}" class="w3-input w3-border">
                    </div>
                    <div class="w3-margin">
                        @php
                        $branches= \App\Branch::all();
                        @endphp
                        <label for="phone">Branch</label>
                        <select name="branch" class="w3-input w3-padding w3-border">
                            @foreach($branches as $branch)
                                <option @if($user->branch_id == $branch->id) selected @endif value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        </select>
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
        </div>
    </div>
    @endforeach
@endsection