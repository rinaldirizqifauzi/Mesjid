@extends('layouts.backend')

@section('title')
    Kepengurusan | {{ config('app.name') }}
@endsection

@section('title-page')
   Edit Kepengurusan
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
        <h6 class="mb-2">Form Edit Data Kepengurusan</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form action="{{ route('pengurus.update', ['penguru' => $pengurus]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-6">
            <label for="nama">Nama</label>
            <div class="form-group">
              <input type="text" value="{{ old('nama', $pengurus->nama ) }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Pengurus ..."  value="{{ old('nama') }}" id="nama" name="nama">
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
                        @if (old('id_jabatan', $jabatanSelected))
                            <option value="{{ $pengurus->id }}" selected>
                                {{ $pengurus->jabatan->nama_jabatan }}
                            </option>
                        @endif>
                    </select>
                    @error('id_jabatan')
                        <label style="color: red">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="jk" style="margin-bottom: 15px">Jenis Kelamin</label>
                <div class="row" style="margin-bottom:23px">
                    <div class="col-lg-6">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="jeniskelamin1" name="jenis_kelamin" value="Laki-Laki" {{ old('jenis_kelamin', $pengurus->jenis_kelamin) == 'Laki-Laki' ? 'checked' : '' }}>
                            <label for="jeniskelamin1" class="custom-control-label" style="font-weight:normal">Laki-Laki</label>
                          </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input custom-control-input-danger" type="radio" id="jeniskelamin2" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $pengurus->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                            <label for="jeniskelamin2" class="custom-control-label"style="font-weight:normal">Perempuan</label>
                          </div>
                    </div>
                    @error('jenis_kelamin')
                    <label style="color: red">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <label for="umur">Umur</label>
                <div class="form-group">
                  <input type="number"  value="{{ old('umur', $pengurus->umur) }}" class="form-control @error('umur') is-invalid @enderror" placeholder="Masukan Umur Pengurus ..." id="umur" name="umur">
                  @error('umur')
                    <label style="color: red">{{ $message }}</label>
                  @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('pengurus.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
            <button type="submit" class="btn btn-warning btn-sm mb-2">Ubah</button>
        </div>
    </form>
   </div>
</div>
@endsection
