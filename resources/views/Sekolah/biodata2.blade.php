@extends('Sekolah.template')

{{-- isset, untuk mengecek apakah validated ada atau tidak --}}
@if (isset($validated))
    @section('title', 'Hasil Input Biodata')
@else
    @section('title', 'Biodata')
@endif

@section('form')
    <form action="{{ route('biodata.create') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control" id="name"
                    @if (isset($validated)) value="{{ $validated['name'] }}" disabled @else value="{{ old('name') }}" @endif>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        @if (!isset($validated)) {{-- !isset, jika tidak ada validated, tampilkan ini --}}
            <div class="row mb-3">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="laki-laki"
                            required {{ old('gender') == 'laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan"
                            required {{ old('gender') == 'perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @else
            <div class="row mb-3">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <input type="text" name="gender" class="form-control" id="gender"
                        @if (isset($validated)) value="{{ $validated['gender'] }}" disabled @else value="{{ old('gender') }}" @endif>
                </div>
                @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        <div class="row mb-3">
            <label for="birth" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" name="birth" class="form-control" id="birth" required
                    @if (isset($validated)) value="{{ $validated['birth'] }}" disabled @else value="{{ old('birth') }}" @endif>
            </div>
            @error('birth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" class="form-control" id="email" required
                    @if (isset($validated)) value="{{ $validated['email'] }}" disabled @else value="{{ old('email') }}" @endif>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="no_hp" class="col-sm-4 col-form-label">No HP/Telp</label>
            <div class="col-sm-8">
                <input type="number" name="no_hp" class="form-control" id="no_hp" required
                    @if (isset($validated)) value="{{ $validated['no_hp'] }}" disabled @else value="{{ old('no_hp') }}" @endif>
            </div>
            @error('no_hp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        @if (!isset($validated))
            <div class="row mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @else
            <div class="row mb-3">
                <label for="no_hp" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="number" name="no_hp" class="form-control" id="no_hp" required
                        @if (isset($validated)) value="{{ $validated['alamat'] }}" disabled @else value="{{ old('alamat') }}" @endif>
                </div>
                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        @if (isset($validated))
            <a href="{{ route('biodata.create') }}" class="btn btn-primary">Back</a>
            @else
            <button type="submit" class="btn btn-primary">Simpan</button>
        @endif
        {{-- <button type="reset" class="btn btn-primary">Reset</button> --}}
    </form>
@endsection
