@extends('layouts.backend')

@section('title')
    Jabatan | {{ config('app.name') }}
@endsection

@section('title-page')
   Edit Jabatan
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
        <h6 class="mb-2">Form Edit Data Jabatan</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form action="{{ route('jabatan.update', ['jabatan' => $jabatan]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-12">
            <label for="nama_jabatan">Nama Jabatan</label>
            <div class="form-group">
              <input type="text" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" class="form-control @error('nama_jabatan') is-invalid @enderror" placeholder="Masukan Nama Jabatan ..." id="nama_jabatan" name="nama_jabatan">
                @error('nama_jabatan')
                    <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('jabatan.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
            <button type="submit" class="btn btn-warning btn-sm mb-2"> Ubah</button>
        </div>
    </form>
   </div>
</div>
@endsection
