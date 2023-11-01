@extends('Sekolah.template')

@section('title', 'Hitung Volume Kerucut')
@section('form')
    <form action="{{ route('hitung.luas') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="jari_jari" class="col-sm-4 col-form-label">Jari jari</label>
            <div class="col-sm-8">
                <input type="text" name="jari_jari" class="form-control" id="jari_jari"">
            </div>
            @error('panjang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Tinggi</label>
            <div class="col-sm-8">
                <input type="text" name="tinggi" class="form-control" id="tinggi">
            </div>
            @error('lebar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @if (@isset($luas))
            
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Area: </label>
            <div class="col-sm-8">
                <input type="text" name="luas" class="form-control" id="luas" value="{{ $luas }}" readonly>
            </div>
        </div>
        @endif

        <button type="submit" class="btn btn-primary">Hitung Luas</button>
    </form>
@endsection
