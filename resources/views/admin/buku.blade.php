@extends('layouts.admin')

@push("css")
@endpush

@section('header', 'Buku')
@section('content')
<component id="controller">
    <div class="row">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" v-model="search" class="form-control" autocomplete="off" placeholder="Cari buku berdasarkan judul">
            </div>
        </div>
        <div class="col ml-4">
            <a href="#" @click="addData()" class="btn bn-sm btn-primary pull-right">Add Buku</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3 col-sm-6 col-xs-12" v-for="buku in filteredList">
            <div class="info-box">
                <div class="info-box-content bg-info">
                    <span class="info-box-text h5">@{{ buku.judul }} (@{{ buku.qty_stok }})</span>
                    <span class="info-box-number d-flex justify-content-between">Rp. @{{ formatPrice(buku.harga_pinjam) }};</span>
                        <div class="text-left box-footer mt-3">
                            <a href="#" class="badge badge-warning text-light" @click="editData(buku)"><i class="fas fa-edit fa-2x"></i></a>
                            <a href="#" class="badge badge-danger text-light" @click="deleteData(buku.id)"><i class="fas fa-trash fa-2x"></i></a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
        <!-- modal box -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form :action="actionUrl" method="POST" autocomplete="off">
                        <div class="modal-header">
                            <h4 class="modal-title" v-if="!editStatus">Add Buku</h4>
                            <h4 class="modal-title" v-if="editStatus">Edit Buku</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control" name="isbn" id="isbn" :value="data.isbn" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul" :value="data.judul" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" class="form-control" name="tahun" id="tahun" :value="data.tahun" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="id_penerbit">Penerbit</label>
                                        <select name="id_penerbit" id="id_penerbit" class="form-control">
                                            @foreach ($data_penerbits as $penerbit)
                                                <option :selected="{{ $penerbit->id }} == data.id_penerbit" :value="{{ $penerbit->id }}">{{ $penerbit->nama_penerbit . ' ' . '(' . $penerbit->id . ')'  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="id_pengarang">Pengarang</label>
                                        <select name="id_pengarang" id="id_pengarang" class="form-control">
                                            @foreach ($data_pengarangs as $pengarang)
                                                <option :selected="{{ $pengarang->id }} == data.id_pengarang" :value="{{ $pengarang->id }}">{{ $pengarang->nama_pengarang . ' ' . '(' . $pengarang->id . ')'  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="id_katalog">Katalog</label>
                                        <select name="id_katalog" id="id_katalog" class="form-control">
                                            @foreach ($data_katalogs as $katalog)
                                                <option :selected="{{ $katalog->id }} == data.id_katalog" :value="{{ $katalog->id }}">{{ $katalog->nama_katalog . ' ' . '(' . $katalog->id . ')'  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="qty_stok">Qty Stok</label>
                                        <input type="text" class="form-control" name="qty_stok" id="qty_stok" :value="data.qty_stok" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="harga_pinjam">Harga Pinjam</label>
                                        <input type="text" class="form-control" name="harga_pinjam" id="harga_pinjam" :value="data.harga_pinjam" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="modal-footer form-group">
                                    <button type="submit" class="form-control btn btn-primary">Simpan</button>
                                    <button type="button" class="form-control btn btn-secondary mt-2" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </component>
@endsection

@push("js")
<script>
    let actionUrl = "{{ url('data/buku') }}";
    let app = new Vue({
        el: "#controller",
        data: {
            search: "",
            data_buku: [],
            data: {},
            actionUrl: actionUrl,
            editStatus: false,
        },
        mounted: function() {
            this.databuku();
        },
        methods: {
            databuku() {
                const _this = this;
                $.ajax({
                    url: actionUrl,
                    method: "GET",
                    success: function(data) {
                        _this.data_buku = JSON.parse(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            },
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace(".", ",");
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
            addData() {
                this.actionUrl = actionUrl;
                this.editStatus = false;
                this.data = {};
                $('#modal-default').modal();
            },
            editData(buku) {
                this.data = buku;
                this.editStatus = true;
                this.actionUrl = actionUrl + "/" + buku.id;
                $("#modal-default").modal();
            },
            deleteData(id) {
                this.actionUrl = '{{ url('data/buku') }}';
                if(confirm('Are you sure ?')){
                    axios.post(this.actionUrl + '/' + id, {_method: 'DELETE'}).then((response) => {
                        location.reload();
                    });
                }
            }
        },
        computed: {
            filteredList() {
                return this.data_buku.filter((buku) => {
                    return buku.judul.toLowerCase().includes(this.search.toLowerCase())
                });
            }
        },
    });
</script>
@endpush