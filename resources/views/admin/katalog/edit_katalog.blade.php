@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
              <div class="card-header">
                  <h3 class="card-title">Edit Katalog</h3>
              </div>
              <form action="{{ url('data/katalog/' . $katalog->id) }}" method="POST">
                @csrf
                {{ method_field('put') }}
              <div class="card-body">
                  <div class="form-group">
                      <label for="nama_katalog">Nama Katalog</label>
                      <input type="text" id="nama_katalog" class="form-control" name="nama" value="{{ $katalog->nama_katalog }}">
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