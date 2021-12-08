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
                <div class="box-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col"><h4>Subject</h4></th>
                            <th scope="col"><h4>Q1</h4></th>
                            <th scope="col"><h4>Q2</h4></th>
                            <th scope="col"><h4>Q3</h4></th>
                            <th scope="col"><h4>Q4</h4></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">English</th>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                        </tr>
                        <tr>
                            <th scope="row">Math</th>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                        </tr>
                        <tr>
                            <th scope="row">Science</th>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                        </tr>
                        <tr>
                            <th scope="row">Araling Panlipunan</th>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                        </tr>
                        <tr>
                            <th scope="row">Computer</th>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                            <td><h4>{{ \random_int(65, 100) }}</h4></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th scope="row"><h4>General Average</h4></th>
                            <td><h4>{{ \random_int(325, 500) / 5 }}</h4></td>
                            <td><h4>{{ \random_int(325, 500) / 5 }}</h4></td>
                            <td><h4>{{ \random_int(325, 500) / 5 }}</h4></td>
                            <td><h4>{{ \random_int(325, 500) / 5 }}</h4></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <br>
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Notable Achievements</h4>

                    <h4>Quarter 1</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h4>Q1 Best in Math</h4></li>
                    </ul>

                    <h4>Quarter 2</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h4>Q2 Best Math</h4></li>
                        <li class="list-group-item"><h4>Champion Basketball boys</h4></li>
                    </ul>

                    <h4>Quarter 3</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h4>Best In Cutting</h4></li>
                    </ul>

                    <h4>Quarter 4</h4>
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer2')
