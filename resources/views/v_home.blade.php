@extends('temp.v_temp')
@section('title', ('Home'))
@section('isicontent')
<div class="container">
    <div class="row justify-content-center">
        <h1>Ini Halaman Home</h1>
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar User</div>
                        <div class="card-body">
                            <a href="#" class="btn btn-sm btn-success mb-2">Tambah Data</a>
                            <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    @endsection
{{-- <script>
    $(function () {
      $("#table1").DataTables({
        "responsive": true,
        "autowidth": true,
        "paging": true,
      });
    });
    $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    
    </script> --}}
    @push('scripts')
    <script type="text/javascript">
    $(document).ready(function () {
       $('#table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'nama_lengkap' },
                { data: 'email', name: 'email' },
    
            ]
        });
     });
    </script>
    @endpush