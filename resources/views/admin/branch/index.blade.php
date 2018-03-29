@extends('layouts.main')
@section('content')
    <section>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-action">
                        Branches <button class="w3-button w3-margin-left w3-blue" onclick="document.getElementById('id01').style.display='block'">Add Branch</button>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">

                            <table class="table table-striped table-advance table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @foreach($branchs as $branch)

                                    <tr class="odd gradeX">
                                        <td>{{$count++}}</td>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$branch->address}}</td>
                                        <td>{{$branch->phone}}</td>
                                        <td>
                                            <a class="w3-button w3-blue w3-margin-right" href="{{ route('branch.index') }}">View</a>
                                            <a onclick="document.getElementById({{$branch->id}}).style.display='block'" class="w3-button w3-green w3-margin-right">Edit</a>
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
    <!-- The Modal -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h3>Add Branch</h3>
                <form method="post" action="{{route('branch.create')}}">
                    {{csrf_field()}}
                    <div class="w3-margin-top">
                        <label for="">Name</label>
                        <input type="text" name="name" required class="w3-input w3-border">
                    </div>
                    <div  class="w3-margin-top">
                        <label for="">Address</label>
                        <input type="text" name="address" required class="w3-input w3-border">
                    </div>
                    <div  class="w3-margin-top">
                        <label for="">Phone no</label>
                        <input type="text" name="phone" required class="w3-input w3-border">
                    </div>
                    <div  class="w3-margin-top ">
                        <button class="w3-button w3-blue w3-right w3-margin-bottom">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach($branchs as $branch)
        <!-- The Modal -->
        <div id="{{$branch->id}}" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom" style="max-width: 500px">
                <div class="w3-container">
                    <span onclick="document.getElementById({{$branch->id}}).style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h3>Add Branch</h3>
                    <form method="post" action="{{route('branch.create')}}">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$branch->id}}" name="id">
                        <div class="w3-margin-top">
                            <label for="">Name</label>
                            <input type="text" name="name" required value="{{$branch->name}}" class="w3-input w3-border">
                        </div>
                        <div  class="w3-margin-top">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$branch->address}}" required class="w3-input w3-border">
                        </div>
                        <div  class="w3-margin-top">
                            <label for="">Phone no</label>
                            <input type="text" name="phone" value="{{$branch->phone}}" required class="w3-input w3-border">
                        </div>
                        <div  class="w3-margin-top ">
                            <button class="w3-button w3-blue w3-right w3-margin-bottom">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection