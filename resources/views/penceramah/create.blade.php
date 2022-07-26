@extends('layouts.backend')

@section('title')
    Penceramah | {{ config('app.name') }}
@endsection

@section('title-page')
   Tambah Penceramah
@endsection

@section('content')
<div class="card">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Form Tambah Data Penceramah</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form action="{{ route('penceramah.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <label for="nama">Nama Penceramah</label>
            <div class="form-group">
              <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Penceramah ..." id="nama" name="nama">
                @error('nama')
                        <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat" placeholder="Masukan Alamat">{{ old('alamat') }}</textarea>
                @error('alamat')
                        <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('penceramah.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm mb-2"> Simpan</button>
        </div>
    </form>
   </div>
  </div>
@endsection
