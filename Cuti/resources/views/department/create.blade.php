@extends('layouts.master')
@section('title','hal create')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ route('department.store') }}" method='POST'>
                <h1 class="text-center">Form dah</h1>
                @csrf
                <div class="form-group">
                <label for="validationCustom04" for="nama_divisi">Divisi</label>
                <select class="custom-select" id="validationCustom04" name="nama_divisi" required>
                  <option value="it" {{ old('nama_divisi') }}>IT</option>
                  <option value="human_resource" {{ old('nama_divisi') }}>Human Resource</option>
                  <option value="manager" {{ old('nama_divisi') }}>Manager</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>

                <div class="form-group">
                    <label for="validationCustom04" for="nama_jabatan">Jabatan</label>
                    <select class="custom-select" id="validationCustom04" name="nama_jabatan" required>
                      <option value="karyawan" {{ old('nama_jabatan') }}>Karyawan</option>
                      <option value="hr_manager" {{ old('nama_jabatan') }}>Hr Manager</option>
                      <option value="head_office" {{ old('nama_jabatan') }}>Head Office</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>

                    {{-- <label for="nama_jabatan">jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value='{{ old('nama_jabatan') }}'>
                    @error('nama_jabatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
                
            
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection