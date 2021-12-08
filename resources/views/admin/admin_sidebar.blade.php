<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu" style="display: block">
                    <li @if ( request()->routeIs('admin.list_admins')) {{ "class=active" }} @endif><a href="{{ route('admin.list_admins') }}"><i class="fa fa-circle-o"></i>Administrators</a></li>
                    <li @if ( request()->routeIs('admin.list_teachers')) {{ "class=active" }} @endif><a href="{{ route('admin.list_teachers') }}"><i class="fa fa-circle-o"></i>Teachers</a></li>
                    <li @if ( request()->routeIs('admin.list_students')) {{ "class=active" }} @endif><a href="{{ route('admin.list_students') }}"><i class="fa fa-circle-o"></i>Students</a></li>
                </ul>
            </li>
            <li @if ( request()->routeIs('admin.add_admin_view')) {{ "class=active" }} @endif>
                <a href="{{ route('admin.add_admin_view') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Admin</span>
                </a>
            </li>
            <li @if ( request()->routeIs('admin.add_teacher_view')) {{ "class=active" }} @endif>
                <a href="{{ route('admin.add_teacher_view') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Teacher</span>
                </a>
            </li>
            <li @if ( request()->routeIs('admin.add_student_view')) {{ "class=active" }} @endif>
                <a href="{{ route('admin.add_student_view') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Student</span>
                </a>
            </li>
            <li class="header"></li>
            <li @if ( request()->routeIs('admin.my_profile')) {{ "class=active" }} @endif>
                <a href="{{ route('admin.my_profile') }}"><i class="glyphicon glyphicon-user"></i> <span>My Profile</span></a>
            </li>
            @if (\Illuminate\Support\Facades\Auth::user())
            <li><a href="#" onclick="document.getElementById('logout').submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
            @endif
        </ul>

        <form id="logout" method="POST" action="{{ route('admin.logout') }}" hidden>
            @csrf {{ csrf_field() }}
            <a href="#" onclick="this.parentNode.submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a>
        </form>
    </section>
</aside>
