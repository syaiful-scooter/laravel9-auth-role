@extends('appstacklayouts.mainpage')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Halaman Mahasiswa</h3>
            </div>
            <div class="card-body">
                @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan')}}
                </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allMhs as $mahasiswa)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="#">{{$mahasiswa->nim}}</a></td>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                            <td>{{$mahasiswa->jurusan}}</td>
                            <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
                <div class="row mt-2">
                    <div class="col">
                        {{ $allMhs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop