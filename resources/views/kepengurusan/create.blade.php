@extends('layouts.backend')

@section('title')
    Kepengurusan | {{ config('app.name') }}
@endsection

@section('title-page')
   Tambah Kepengurusan
@endsection

@section('content-header')
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <a href="{{ route('pengurus.index') }}">
                <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Database</p>
                    <h5 class="font-weight-bolder">
                      Kepengurusan
                    </h5>
                </div>
              </a>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <a href="{{ route('jabatan.index') }}">
                <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Database</p>
                    <h5 class="font-weight-bolder">
                      Jabatan
                    </h5>
                </div>
              </a>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Form Tambah Data Kepengurusan</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form action="{{ route('pengurus.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label for="nama">Nama</label>
            <div class="form-group">
              <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Pengurus ..." id="nama" name="nama">
                @error('nama')
                    <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
          </div>
          <div class="col-md-6">
                <label for="id_jabatan">Jabatan</label>
                <div class="form-group">
                    <select class="form-control @error('id_jabatan') is-invalid @enderror" id="id_jabatan" name="id_jabatan">
                    <option>Pilih Jabatan</option>
                        @foreach ($jabatan as $field)
                            <option value="{{ $field->id }}">{{ $field->nama_jabatan }}</option>
                        @endforeach
                    </select>
                    @error('id_jabatan')
                        <label style="color: red">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="jk">Jenis Kelamin</label>
                <div class="form-group">
                  <input type="text" class="form-control @error('jk') is-invalid @enderror" placeholder="Masukan Jenis Kelamin Pengurus ..." id="jk" name="jk">
                  @error('jk')
                      <label style="color: red">{{ $message }}</label>
                  @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="umur">Umur</label>
                <div class="form-group">
                  <input type="number" class="form-control @error('umur') is-invalid @enderror" placeholder="Masukan Umur Pengurus ..." id="umur" name="umur">
                  @error('umur')
                    <label style="color: red">{{ $message }}</label>
                  @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('pengurus.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm mb-2"> Simpan</button>
        </div>
    </form>
   </div>
</div>
@endsection
