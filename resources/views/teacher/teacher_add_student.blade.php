@include('header')
@include('teacher.teacher_sidebar')



<!-- jQuery 3 -->
<script src="{{ url('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/dist/js/demo.js') }}"></script>


<div class="wrapper" style="height: auto; min-height: 100%">
    <div class="content-wrapper">
        <section class="content">
            <div class="box box-primary">
                @if ($error ?? null)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                    <br>
                @endif
                @if($success ?? null)
                    <div class="alert alert-success" role="alert">
                        {{ $success }}
                    </div>
                    <br>
                @endif
                <div class="box-header with-border">
                    <h3 class="box-title">Add Student</h3>
                </div>
                <div class="box-body">
                    <form role="form" method="POST" action="{{ route('teacher.add_student') }}">
                        @csrf {{ csrf_field() }}
                        <div class="form-group col-xs-3">
                            <label>First Name</label>
                            <input type="text" name="first_name" required class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Middle Name</label>
                            <input type="text" name="middle_name" required class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Last Name</label>
                            <input type="text" name="last_name" required class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group col-xs-6">
                            <label>Email</label>
                            <input type="email" name="email" required class="form-control" placeholder="email">
                        </div>
                        <div class="form-group col-xs-6">
                            <label>Password</label>
                            <input type="password" name="password" minlength="8" required class="form-control" placeholder="Default Password">
                        </div>
                        <div class="form-group col-xs-12">
                            <button type="submit" onclick="this.parentNode.submit();" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer2')
