<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="waves-effect waves-dark" href="{{url('accounting')}}"><i class="fa fa-edit"></i>Records</a>
            </li>

            <li>
                <a href="{{route('calculate')}}" class="waves-effect waves-dark"><i class="fa fa-calculator"></i>Calculator</a>
            </li>
            <li>
                <a href="{{route('branch.index')}}" class="waves-effect waves-dark"><i class="fa fa-bank"></i>Branch</a>
            </li>
            <li>
                <a href="{{route('users')}}" class="waves-effect waves-dark"><i class="fa fa-users"></i>Users</a>
            </li>
            <li>
                <a href="{{route('registration')}}" class="waves-effect waves-dark"><i class="fa fa-user"></i>Register User</a>
            </li>
            <li>
                <a href="{{url('/logout')}}" class="waves-effect waves-dark"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->