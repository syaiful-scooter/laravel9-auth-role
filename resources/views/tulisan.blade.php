@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tulisan') }}</div>

                <div class="card-body ">

                    <table class="table-auto mx-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Porro, et?</td>
                                <td class="border px-4 py-2">
                                    <button type="submit" class="btn btn-primary">Lihat</button>

                                    @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('penulis') )
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection