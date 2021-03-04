@extends('../layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="bg-danger text-center text-white">DATA PELAPOR</h2>
                <div class="d-flex align-items-center">
                    <button class="btn btn-danger btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                       Tambah Data
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="display dt-responsive table table-striped table-hover data-table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nik</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Status Kawain</th>
                            <th>no_hp</th>
                            <th width="15%">Action</th>
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
<script type="text/javascript">
    $(function () {
    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
    var table = $('.data-table').DataTable({
        responsive:true,
        processing: true,
        serverSide: true,
        ajax: "{{ route('index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nik', name: 'nik'},
            {data: 'nama_lengkap', name: 'nama_lengkap'},
            {data: 'alamat', name: 'alamat'},
            {data: 'tanggal_lahir', name: 'tanggal_lahir'},
            {data: 'agama', name: 'agama'},
            {data: 'status_kawin', name: 'status_kawin'},
            {data: 'no_hp', name: 'no_hp'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    });
</script>
@endsection
