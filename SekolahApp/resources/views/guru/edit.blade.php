@extends('layout.main')

@section('title','TAMBAH GURU')
    
@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center">Form Tambah Guru</h3>
      <!-- Vertical Form -->
      <form class="row g-3" method="POST" action="{{ route('guru.update', $guru['id']) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="col-12 ">
            <label for="nuptk" class="form-label">NUPTK Guru</label>
            <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{old('nuptk') ? old('nuptk'): $guru['nuptk'] }}" placeholder="Masukan NUPTK Guru" readonly>
        </div>
        <div class="col-12 ">
            <label for="nama" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama') ? old('nama'): $guru['nama'] }}" placeholder="Masukan Nama Guru">
        </div>
        <div class="col-12 ">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin') ? old('jenis_kelamin'): $guru['jenis_kelamin'] }}" placeholder="Masukan Jenis Kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-12 ">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email') ? old('email'): $guru['email'] }}" placeholder="Masukan Email Guru">
        </div>
        <div class="col-12 ">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat') ? old('alamat'): $guru['alamat'] }}" placeholder="Masukan Alamat Guru">
        </div>
        <div class="col-12 ">
            <label for="jurusan_id" class="form-label">Jurusan</label>
            <select class="form-control" id="jurusan_id" name="jurusan_id" value="{{old('jurusan_id') ? old('jurusan_id'): $guru['jurusan_id'] }}" placeholder="Masukan Jurusan">
                @foreach ($jurusan as $items)
                    <option value="{{$items['id']}}">
                        {{$items['singkatan']}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 ">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir') ? old('tempat_lahir'): $guru['tempat_lahir'] }}" placeholder="Masukan Tempat Lahir">
        </div>
        <div class="col-12 ">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir') ? old('tanggal_lahir'): $guru['tanggal_lahir'] }}" placeholder="Masukan Tanggal Lahir">
        </div>
        <div class="col-12">
            <label for="url_guru">Foto</label>
            <input type="file" class="form-control" name="url_guru">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('guru') }}" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    </div>
  </div>
@endsection