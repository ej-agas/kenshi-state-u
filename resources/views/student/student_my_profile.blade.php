@include('header')
@include('student.student_sidebar')



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
                    <h3 class="box-title">My Profile</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        @csrf {{ csrf_field() }}
                        <div class="form-group col-xs-3">
                            <label>Student ID</label>
                            <input type="text" name="id" class="form-control" value="{{ $user->id }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Middle Name</label>
                            <input type="text" name="middle_name" class="form-control" value="{{ $user->middle_name }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Created At</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->created_at?->format("F j Y, h:i:s A") }}" readonly>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Last Updated At</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->updated_at?->format("F j Y, h:i:s A") }}" readonly>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">My Current Teacher</h3>
                </div>
                <div class="box-body">
                    @if( $user->teacher ?? null )
                        <div class="form-group col-xs-3">
                            <label>Teacher Id</label>
                            <h4>{{ $user->teacher->id }}</h4>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>First Name</label>
                            <h4>{{ $user->teacher->first_name }}</h4>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Middle Name</label>
                            <h4>{{ $user->teacher->middle_name }}</h4>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Last Name</label>
                            <h4>{{ $user->teacher->last_name }}</h4>
                        </div>
                        <div class="form-group col-xs-3">
                            <label>Email</label>
                            <h4>{{ $user->teacher->email }}</h4>
                        </div>
                    @else
                        <h3>You currently have no teacher.</h3>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer2')
