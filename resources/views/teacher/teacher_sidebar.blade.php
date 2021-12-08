<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li @if ( request()->routeIs('teacher.my_students')) {{ "class=active" }} @endif>
                <a href="{{ route('teacher.my_students') }}">
                    <i class="fa fa-users"></i> <span>My Students</span>
          </span>
                </a>
            </li>
            <li @if ( request()->routeIs('teacher.add_student_view')) {{ "class=active" }} @endif>
                <a href="{{ route('teacher.add_student_view') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Student</span>
                </a>
            </li>
            <li class="header"></li>
            <li @if ( request()->routeIs('teacher.my_profile')) {{ "class=active" }} @endif>
                <a href="{{ route('teacher.my_profile') }}"><i class="glyphicon glyphicon-user"></i> <span>My Profile</span></a>
            </li>
            @if (\Illuminate\Support\Facades\Auth::user())
            <li><a href="#" onclick="document.getElementById('logout').submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
            @endif
        </ul>

        <form id="logout" method="POST" action="{{ route('teacher.logout') }}" hidden>
            @csrf {{ csrf_field() }}
            <a href="#" onclick="this.parentNode.submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a>
        </form>
    </section>
</aside>
