@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">

        {{-- HEADER --}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Masyarakat</h4>

            <a href="{{ route('masyarakat.create') }}" class="btn btn-primary btn-sm">
                Tambah Data
            </a>
        </div>

        {{-- BODY --}}
        <div class="card-body">

            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No KK</th>
                        <th>No KTP</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($data as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nomor_kk }}</td>
                        <td>{{ $item->nomor_ktp }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->alamat }}</td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <div style="display:flex; justify-content:center; gap:5px;">

                                <a href="{{ route('masyarakat.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('masyarakat.destroy', $item->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Hapus data?')"
                                            class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data tidak ada
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection