@extends('layouts.backend')

@section('title')
    Penceramah | {{ config('app.name') }}
@endsection

@section('title-page')
    Penceramah
@endsection

@section('content')
<div class="card ">
    <div class="card-header mb-4 pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Tabel Data Penceramah</h6>
        <a href="{{ route('penceramah.create') }}" class="btn btn-primary btn-sm mb-0"> Tambah Data</a>
      </div>
     </div>
    <div class="table-responsive">
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0 ">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Nama Penceramah</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Penceramah</th>
                    <th class="text-secondary opacity-7">Manage</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($penceramah as $field)
                    <tr>
                      <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-center">{{ $no++ }}</h6>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm text-center">{{ $field->nama }}</h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm text-center">{{ $field->alamat }}</h6>
                      </td>
                      <td>
                        <a href="{{ route('penceramah.edit', ['penceramah' => $field]) }}" class="btn btn-xs mb-1 btn-warning">Edit </a>
                        <form action="{{ route('penceramah.destroy', ['penceramah' => $field]) }}" method="POST" class="d-inline">
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
