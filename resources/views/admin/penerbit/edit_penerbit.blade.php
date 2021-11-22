@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
              <div class="card-header">
                  <h3 class="card-title">Add Penerbit</h3>
              </div>
              <form action="{{ url('data/penerbit/' . $penerbit->id) }}" method="POST">
                @csrf
                {{ method_field('put') }}
              <div class="card-body">
                  <div class="form-group">
                      <label for="nama_penerbit">Nama Penerbit</label>
                      <input type="text" id="nama_penerbit" class="form-control" name="nama" value="{{ $penerbit->nama_penerbit }}">
                      <label for="email">Email Penerbit</label>
                      <input type="email" id="email" class="form-control" name="email" value="{{ $penerbit->email }}">
                      <label for="telp">Telp Penerbit</label>
                      <input type="text" id="telp" class="form-control" name="telp" value="{{ $penerbit->telp }}">
                      <label for="alamat">Alamat Penerbit</label>
                      <input type="text" id="alamat" class="form-control" name="alamat" value="{{ $penerbit->alamat }}">
                  </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
        </div>
    </div>
</div>
@endsection