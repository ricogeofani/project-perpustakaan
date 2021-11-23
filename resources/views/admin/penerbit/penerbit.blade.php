@extends('layouts.admin')
@section('header', 'penerbit')

@push('css')
    <style type="text/css"></style>
@endpush

@section('content')
<component id="controller">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Add Penerbit</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Penerbit</th>
                            <th>Email Penerbit</th>
                            <th>Telp Penerbit</th>
                            <th>Alamat Penerbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_penerbits as $num => $penerbit )
                       <tr>
                           <td>{{ $num+1 }}.</td>
                           <td>{{ $penerbit->nama_penerbit }}</td>
                           <td>{{ $penerbit->email }}</td>
                           <td>{{ $penerbit->telp }}</td>
                           <td>{{ $penerbit->alamat }}</td>
                           <td class="text-right">
                                <a href="#" @click="editData({{ $penerbit }})" class="btn btn-sm btn-warning rounded-pill">Update</a>
                                <a href="#" @click="deleteData({{ $penerbit->id }})" class="btn btn-sm btn-danger rounded-pill">Delete</a>
                           </td>
                       </tr> 
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- modal vue --}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form :action="actionURL" method="POST" autocomplete="of">
                <div class="modal-header">
                    <h4 class="modal-title" v-if="!editStatus">Add Penerbit</h4>
                    <h4 class="modal-title" v-if="editStatus">Edit Penerbit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="_method" value="put" v-if="editStatus">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Penerbit</label>
                        <input type="text" class="form-control" name="nama" :value="data.nama_penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" :value="data.email" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control" name="telp" :value="data.telp" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" :value="data.alamat" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
</component>
@endsection

@push('js')
<script type="text/javascript">
    var app = new Vue({
        el: '#controller',
        data: {
            editStatus: false,
            data: {},
            actionURL: ''
        },
        mounted: function(){

        },
        methods: {
            addData() {
                this.editStatus = false;
                this.data = {};
                this.actionURL = '{{ url('data/penerbit') }}';
                $('#modal-default').modal();
            },
            editData(penerbit) {
                this.editStatus = true;
                this.data = penerbit;
                this.actionURL = '{{ url('data/penerbit') }}' + '/' + penerbit.id;
                $('#modal-default').modal();
            },
            deleteData(id){
                this.actionURL = '{{ url('data/penerbit') }}';
                if(confirm('Are you sure ?')){
                    axios.post(this.actionURL + '/' + id, {_method: 'DELETE'}).then((response) => {
                        location.reload();
                    });
                }
            }
        }
    });
</script>
@endpush