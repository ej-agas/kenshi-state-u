<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li @if ( request()->routeIs('student.grades')) {{ "class=active" }} @endif>
                <a href="{{ route('student.grades') }}"><i class="glyphicon glyphicon-education"></i> <span>My Grades</span></a>
            </li>
            <li @if ( request()->routeIs('student.my_profile')) {{ "class=active" }} @endif>
                <a href="{{ route('student.my_profile') }}"><i class="glyphicon glyphicon-user"></i> <span>My Profile</span></a>
            </li>
            <li class="header"></li>
            @if (\Illuminate\Support\Facades\Auth::user())
                <li><a href="#" onclick="document.getElementById('logout').submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
            @endif
        </ul>

        <form id="logout" method="POST" action="{{ route('student.logout') }}" hidden>
            @csrf {{ csrf_field() }}
            <a href="#" onclick="this.parentNode.submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a>
        </form>
    </section>
</aside>
