@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Data Masyarakat</h4>
        </div>

        <div class="card-body">

            {{-- error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('masyarakat.store') }}" method="POST">
                @csrf

                <div class="mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-2">
                    <label>No KK</label>
                    <input type="text" name="nomor_kk" class="form-control">
                </div>

                <div class="mb-2">
                    <label>No KTP</label>
                    <input type="text" name="nomor_ktp" class="form-control">
                </div>

                <div class="mb-2">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">-- pilih --</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-2">
                    Simpan
                </button>

            </form>
        </div>
    </div>
</div>

@endsection