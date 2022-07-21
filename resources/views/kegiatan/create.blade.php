@extends('layouts.backend')

@section('title')
    Kegiatan | {{ config('app.name') }}
@endsection

@section('title-page')
   Tambah Kegiatan
@endsection

@section('content-header')
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <a href="{{ route('kegiatan.index') }}">
                <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Database</p>
                    <h5 class="font-weight-bolder">
                      Kegiatan
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
              <a href="{{ route('jenis-kegiatan.index') }}">
                <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Database</p>
                    <h5 class="font-weight-bolder">
                      Jenis Kegiatan
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
        <h6 class="mb-2">Form Tambah Data Kegiatan</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
    <form>
        <div class="row">
          <div class="col-md-6">
            <label for="tanggal">Tanggal</label>
            <div class="form-group">
              <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
          </div>
          <div class="col-md-6">
            <label for="waktu">Jam</label>
            <div class="form-group">
              <input type="time" class="form-control" id="waktu" name="waktu">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="nama">Nama Kegiatan</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Kegiatan ...">
                </div>
            </div>
            <div class="col-md-6">
                <label for="jenis">Jenis Kegiatan</label>
                <div class="form-group">
                    <select class="form-control" id="jenis" name="jenis">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="nama_penceramah">Nama Penceramah</label>
                <div class="form-group">
                    <select class="form-control" id="nama_penceramah" name="nama_penceramah">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="nama_pengurus">Nama Pengurus</label>
                <div class="form-group">
                    <select class="form-control" id="nama_pengurus" name="nama_pengurus">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
                  </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('kegiatan.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm mb-2"> Simpan</button>
        </div>
    </form>
   </div>


  </div>
@endsection
