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
        <h6 class="mb-2">Form Tambah Data Kegiatan</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form>
        <div class="row">
          <div class="col-md-12">
            <label for="nama">Nama Penceramah</label>
            <div class="form-group">
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Penceramah ..." id="nama" name="nama">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Masukan Alamat"></textarea>
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
