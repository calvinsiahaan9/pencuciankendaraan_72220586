@extends('layouts.main')
@section('title', 'Form edit movies')
@section('artikel')
    <div>
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/update/{{ $mv->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" value="{{ $mv->title }}" required>
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <select name="genre" class="form-control">
                        <option value="0">--Pilih Tipe--</option>
                        <option value="Mobil" {{ ($mv->genre == "Mobil")?"selected":"" }}>Mobil</option>
                        <option value="Motor" {{ ($mv->genre == "Motor")?"selected":"" }}>Motor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" value="{{ $mv->year }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/'.$mv->poster) }}" alt="{{ $mv->poster }}" height="80" width="80">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
