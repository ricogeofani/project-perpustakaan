@extends('layouts.admin')
@push('css')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
@endpush

@section('header', 'peminjaman')

@section('content')

{{-- hanya user yang mempunyai role petugas yang hanya bisa akses index peminjaman --}}
@can('index peminjaman')
{{-- @role('petugas') --}}
<component id="controller">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Tambah Transaksi</a>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" name="status">
                                <option value="0">Semua Data Status</option>
                                <option value="sudah">Sudah Dikembalikan</option>
                                <option value="belum">Belum Dikembalikan</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="tglPinjam" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Nama Peminjam</th>
                                <th>Lama Pinjam (hari)</th>
                                <th>Total Buku</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add and edit -->
    <div class="modal fade" id="modal-default" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form :action="actionUrl" method="post" autocomplete="of" @submit="submitForm($event, data.id)">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel" v-if="!editStatus">Tambah Peminjaman</h4>
                        <h4 class="modal-title" id="exampleModalLabel" v-if="editStatus">Edit Peminjaman</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="put" v-if="editStatus">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Anggota</label>
                            </div>
                            <div class="col-md-8">
                                <select name="id_anggota" class="form-control">
                                    @foreach ($anggotas as $anggota)
                                    <option :selected="{{ $anggota->id }} == data.id_anggota" :value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Tanggal </label>
                            </div>
                            <div class="col-md-8 d-flex justify-content-between">
                                <input type="date" name="tgl_pinjam" :value="data.tgl_pinjam" required style="height: 30px; width: 140px;" class="form-control">
                                <span class="font-weight-bold">-</span>
                                <input type="date" name="tgl_kembali" :value="data.tgl_kembali" required style="height: 30px; width: 140px;" class="form-control">
                            </div>
                        </div> 
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Buku</label>
                            </div>
                            <div class="col-md-8">
                                <div class="select2-warning">
                                    <select class="select2" name="id_buku[]" multiple="multiple" data-placeholder="Pilih Buku yang Dipinjam" style="width: 100%;">
                                        @foreach ($bukus as $buku)
                                        <option :value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2" v-if="editStatus">
                            <div class="col-md-4">
                                <label>Status</label>
                            </div>
                            <div class="col-md-8">
                                <input :checked="data.status == 1" type="radio" name="status" value="1" required> Sudah Dikembalikan <br>
                                <input :checked="data.status == 0" type="radio" name="status" value="0" required> Belum Dikembalikan
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

      <!-- Modal detail -->
      <div class="modal fade" id="modal-detail" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Detail Peminjaman</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Anggota</label>
                            </div>
                            <div class="col-md-8" style="margin-top: -5px">
                                <h5 v-for="anggota in data">@{{ anggota.nama }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Tanggal </label>
                            </div>
                            <div class="col-md-8 d-flex justify-content-between">
                               <p>@{{ data.tgl_pinjam }}</p>
                            </div>
                        </div> 
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Buku</label>
                            </div>
                            <div class="col-md-8 border">
                                <ul v-for="buku in data.buku">
                                    <li>@{{ buku.judul }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label>Status</label>
                            </div>
                            <div class="col-md-8">
                                <p>@{{ data.status == 1 ? 'sudah dikembalikan' : 'belum dikembalikan' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>

</component>
{{-- @endrole --}}
@endcan

@endsection

@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

    {{-- show data --}}
    <script type="text/javascript">
        let actionUrl = '{{ url('data/peminjaman') }}';
        let columns = [
            {data: 'id', class: 'd-none'},
            {data: 'tgl_pinjam',  class: 'text-center', orderable: true},
            {data: 'tgl_kembali', class: 'text-center', orderable: true},
            {data: 'anggota.nama', class:'text-center', orderable: true},
            {data: 'lama_pinjam', class: 'text-center', orderable: true}, 

            //menghitung lama peminjaman
            // {render: function(index, row, data, meta) {
            //   const day = 24 * 60 * 60 * 1000;
            //   const lama_pinjam = new Date(data.tgl_kembali) - new Date(data.tgl_pinjam);
            //   return lama_pinjam / day + ' ' + 'hari';
            // }, orderable: true, class: "text-center"},

            // menghitung total buku
            {render: function(index, row, data, meta) {
                return data.detail_peminjaman.reduce( (accumulator, currentValue) => accumulator + currentValue.qty, 0);
            }, orderable: true, class: 'text-center'},

            // menghitung total bayar
            {render: function(index, row, data, meta) {
                const harga_pinjam = data.buku.reduce( (accumulator, currentValue) => accumulator + currentValue.harga_pinjam, 0);
                const total_buku = data.detail_peminjaman.reduce( (accumulator, currentValue) => accumulator + currentValue.qty, 0);
                total_bayar = harga_pinjam * total_buku;

                const rupiah = (total_bayar)=>{
                    return new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR"
                    }).format(total_bayar);
                }
                return rupiah(total_bayar);
            }, orderable: true, class: 'text-center'},

            //status
            {render: function(index, row, data, meta) {
                if(data.status == 1) {
                    return 'sudah dikembalikan';
                }else {
                    return 'belum dikembalikan';
                }
            }, orderable: true, class: 'text-center'},

            {render: function(index, row, data, meta) {
                return `
                    <div class="d-flex">
                        <a href="#" class="btn btn-sm btn-info ml-2" onclick="controller.detailData(event, ${meta.row})">
                            Detail
                        </a>
                        <a href="#" class="btn btn-sm btn-warning ml-2" onclick="controller.editData(event, ${meta.row})">
                            Update
                        </a>
                        <a href="#" class="btn btn-danger btn-sm ml-2" onclick="controller.deleteData(event, ${data.id})">
                            Delete
                        </a>
                    </div>
                    `;
            }, orderable: false, width: '100px', class: 'text-center'},
        ]
    </script>

    <script type="text/javascript">
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

    {{-- asset javascript --}}
    <script src="{{ asset('js/data.js') }}"></script>

    {{-- filter status --}}
    <script type="text/javascript">
        $('select[name=status]').on('change', function() {
            status = $('select[name=status]').val();
            tglPinjam = $('input[name=tglPinjam]').val();

            if(status == 0) {
                if(tglPinjam == '') {
                    controller.table.ajax.url(actionUrl).load();
                }else {
                    controller.table.ajax.url(actionUrl + '?tglPinjam=' + tglPinjam).load();
                }
            }else {
                controller.table.ajax.url(actionUrl + '?status=' + status + '&tglPinjam=' + tglPinjam).load();
            }
        })
        $('input[name=tglPinjam]').on('change', function() {
            tglPinjam = $('input[name=tglPinjam]').val();
            status = $('select[name=status]').val();

            if(tglPinjam == '') {
                if(status == 0) {
                    controller.table.ajax.url(actionUrl).load();
                }else {
                    controller.table.ajax.url(actionUrl + '?status=' + status).load();
                }
            }else {
                controller.table.ajax.url(actionUrl + '?status=' + status + '&tglPinjam=' + tglPinjam ).load();
            }
        })

    </script>
    
@endpush