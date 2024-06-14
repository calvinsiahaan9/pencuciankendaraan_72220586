@extends('layouts.main')
@section('title', 'Form add cuci')
@section('artikel')
    <div>
        <div class="card-header"></div>
        <div class="card-header">
            <form action="/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <select name="genre" class="form-control">
                        <option value="0">--Pilih Tipe--</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
