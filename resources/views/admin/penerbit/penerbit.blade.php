@extends('layouts.admin')
@section('header', 'penerbit')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('data/penerbit/create') }}" class="btn btn-sm btn-primary pull-right">Add Penerbit</a>
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
                                <a href="{{ url('data/penerbit/' . $penerbit->id . '/edit') }}" class="btn btn-sm btn-warning mr-2 rounded-pill">Update</a>
                                <div class="button-right float-right">
                                    <form action="{{ url('data/penerbit/' . $penerbit->id)  }}" method="POST">
                                        <input class="btn btn-sm btn-danger rounded-pill" type="submit" value="Delete" onclick="return confirm('apakah anda yakin?')">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </div>
                           </td>
                       </tr> 
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection