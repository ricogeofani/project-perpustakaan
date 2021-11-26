
@extends('layouts.admin')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('header', 'Anggota')

@section('content')
<component id="controller">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Add Anggota</a>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Anggota</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon Anggota</th>
                                <th>Alamat Anggota</th>
                                <th>Email Anggota</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal-default" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form :action="actionUrl" method="post" autocomplete="of" @submit="submitForm($event, data.id)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" v-if="!editStatus">Add Anggota</h4>
                    <h4 class="modal-title" id="exampleModalLabel" v-if="editStatus">Edit Anggota</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="_method" value="put" v-if="editStatus">
                    @csrf
                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input type="text" name="nama" :value="data.nama" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="sex" class="form-control">
                            <option :selected="data.sex == 'L' " value="L">Laki-laki</option>
                            <option :selected="data.sex == 'P' " value="P">Perempuan</option>
                        </select>
                    </div> 
                     <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telp" :value="data.telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" :value="data.alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" :value="data.email" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</component>
@endsection

@push('js')
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

        <script type="text/javascript">
            var actionUrl = '{{ url('data/anggota') }}';
            var columns = [
                {data: 'nama', class: 'text-center', orderable: true},
                {data: 'sex', class: 'text-center', orderable: true},
                {data: 'telp', class: 'text-center', orderable: true},
                {data: 'alamat', class: 'text-center', orderable: true},
                {data: 'email', class: 'text-center', orderable: true},
                {render: function(index, row, data, meta){
                    return `
                    <div class="d-flex">
                        <a href="#" class="btn btn-sm btn-warning rounded-pill" onclick="controller.editData(event, ${meta.row})">
                            Update
                        </a>
                        <a href="#" class="btn btn-danger btn-sm rounded-pill" onclick="controller.deleteData(event, ${data.id})">
                            Delete
                        </a>
                    </div>
                    `;
                }, orderable: false, width: '100px', class: 'text-center'},
            ];

         </script>
        <script  src="{{ asset('js/data.js') }}"></script>
@endpush 
