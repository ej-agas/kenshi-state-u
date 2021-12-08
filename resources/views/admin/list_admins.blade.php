@include('header')
@include('admin.admin_sidebar')

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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<div class="wrapper" style="height: auto; min-height: 100%">
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Administrators</h3>
                        </div>
                        <div class="box-body">
                            @if( session('success') )
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                <br>
                            @endif
                            @if( session('error') )
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                                <br>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (! empty($admins))
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td>{{ $admin->id }}</td>
                                                <td>{{ $admin->first_name }}</td>
                                                <td>{{ $admin->middle_name }}</td>
                                                <td>{{ $admin->last_name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->created_at->format('F j Y, h:i:s A') }}</td>
                                                <td>{{ $admin->updated_at->format('F j Y, h:i:s A') }}</td>
                                                <td>
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-md"
                                                        data-toggle="modal"
                                                        data-target="#updateModal{{ $admin->id }}"
                                                        data-id="{{ $admin->id }}"
                                                    >
                                                        Update User
                                                    </button>
                                                    <div
                                                        class="modal fade"
                                                        id="updateModal{{ $admin->id }}"
                                                        tabindex="-1"
                                                        role="dialog"
                                                        aria-labelledby="myModalLabel"
                                                    >
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title" id="myModalLabel">Update User</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" method="POST" action="{{ route('admin.update_admin', ['id' => $admin->id]) }}">
                                                                        @method('PATCH')
                                                                        @csrf {{ csrf_field() }}
                                                                        <div class="form-group col-md-6">
                                                                            <label>
                                                                                First Name
                                                                                <input type="text" name="first_name" required class="form-control" value="{{ $admin->first_name }}">
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>
                                                                                Middle Name
                                                                                <input type="text" name="middle_name" required class="form-control" value="{{ $admin->middle_name }}">
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>
                                                                                Last Name
                                                                                <input type="text" name="last_name" required class="form-control" value="{{ $admin->last_name }}">
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>
                                                                                Email
                                                                                <input type="email" name="email" required class="form-control" value="{{ $admin->email }}">
                                                                            </label>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary" onclick="this.parentNode.parentNode.submit();">Save Changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer2')
