@extends('layouts/main')
@section('title', 'Data')
@section('artikel')
    <div class="card"></div>
    <div class="card-header">
        <a href="/pencucian/form-add" class="btn btn-primary"> <i class="bi bi-plus-square"></i></i> Pencucian</a>
    </div>
    <div class="card-body"></div>
    @if (@session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Poster</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mv as $idx => $m)
                <tr>
                    <td>{{ $idx + 1 }}</td>
                    <td>{{ $m->title }}</td>
                    <td>{{ $m->genre }}</td>
                    <td>{{ $m->year }}</td>
                    <td>
                        <img src="{{ asset('/storage/' . $m->poster) }}" alt="{{ $m->poster }}" height="120"
                            width="150px">
                    </td>
                    <td><a href="/form-edit/{{ $m->id }}" class="btn btn-success bi bi-pencil"></a>
                        <a href="/delete/{{ $m->id }}" class="btn btn-danger bi bi-trash"></a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
