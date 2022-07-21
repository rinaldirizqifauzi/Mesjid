@extends('layouts.backend')

@section('title')
    Jabatan | {{ config('app.name') }}
@endsection

@section('title-page')
    Jabatan
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
              <a href="">
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
<div class="card ">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Sales by Country</h6>
        <a href="{{ route('jabatan.create') }}" class="btn btn-primary btn-sm mb-0"> Tambah Data</a>
      </div>
    </div>
    <div class="table-responsive">
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0 ">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Nama Jabatan</th>
                    <th class="text-secondary opacity-7">Manage</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($jabatan as $field)
                    <tr>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $no++ }}</h6>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm text-center">{{ $field->nama_jabatan }}</h6>
                      </td>
                      <td>
                        <a href="{{ route('jabatan.edit', ['jabatan' => $field]) }}" class="btn btn-xs mb-1 btn-warning">Edit</i> </a>
                        <form action="{{ route('jabatan.destroy', ['jabatan' => $field]) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-xs mb-1 btn-danger" onclick="return confirm('Apa Kamu Yakin Menghapus Data Ini')">Hapus</i></button>
                          </form>
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
