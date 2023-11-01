@extends('Sekolah.template')

@section('title', 'Biodata')
@section('form')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('biodata.create') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="row mb-3">
            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
            <div class="col-sm-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="laki-laki" required>
                    <label class="form-check-label" for="laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan" required>
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>
            @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="birth" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" name="birth" class="form-control" id="birth" required>
            </div>
            @error('birth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="no_hp" class="col-sm-4 col-form-label">No HP/Telp</label>
            <div class="col-sm-8">
                <input type="number" name="no_hp" class="form-control" id="no_hp" required>
            </div>
            @error('no_hp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        {{-- <button type="reset" class="btn btn-primary">Reset</button> --}}
    </form>
@endsection
