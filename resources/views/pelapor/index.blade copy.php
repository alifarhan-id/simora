<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <title>Pelapor - SIMORA</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-5">
            <div class="card-header">
               <div class="col-md-12">
                   <h4 class="card-title">Laravel 7 Ajax CRUD tutorial using Datatable - nicesnippets.com  
                     <a class="btn btn-success ml-5" href="javascript:void(0)" id="createNewItem"> Create New Item</a>
                   </h4>
               </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered data-table">
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
           <div class="modal fade" id="ajaxModel" aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="modelHeading"></h4>
                       </div>
                       <div class="modal-body">
                           <form id="ItemForm" name="ItemForm" class="form-horizontal">
                              <input type="hidden" name="Item_id" id="Item_id">
                               <div class="form-group">
                                   <label for="name" class="col-sm-2 control-label">Name</label>
                                   <div class="col-sm-12">
                                       <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-sm-3 control-label">descriptions</label>
                                   <div class="col-sm-12">
                                       <textarea id="description" name="description" required="" placeholder="Enter descriptions" class="form-control"></textarea>
                                   </div>
                               </div>
                               <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                                </button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </body>
   <script type="text/javascript">
        $(function () {
        
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        
        var table = $('.data-table').DataTable({
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
</html>