@extends('layouts.admin')
@section('header', 'katalog')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('data/katalog/create') }}" class="btn btn-sm btn-primary pull-right">Add Katalog</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Katalog</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_katalogs as $num => $katalog )
                       <tr>
                           <td>{{ $num+1 }}.</td>
                           <td>{{ $katalog->nama_katalog }}</td>
                           <td class="text-right">
                                <a href="{{ url('data/katalog/' . $katalog->id . '/edit') }}" class="btn btn-sm btn-warning mr-2 rounded-pill">Update</a>
                                <div class="button-right float-right">
                                    <form action="{{ url('data/katalog/' . $katalog->id)  }}" method="POST">
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