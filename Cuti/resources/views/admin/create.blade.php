@extends('layouts.master')
@section('title','hal create')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ route('jabatan.store') }}" method='POST'>
                <h1 class="text-center">Form dah</h1>
                @csrf
                <div class="form-group">
                    <label for="nama_jabatan">jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value='{{ old('nama_jabatan') }}'>
                    @error('nama_jabatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="nama_divisi">Divisi</label>
                    <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" value='{{ old('nama_divisi') }}'>
                    @error('nama_divisi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection