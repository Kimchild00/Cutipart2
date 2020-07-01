@extends('layouts.master')
@section('title','hal create')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ route('mail.store') }}" method='POST'>
                <h1 class="text-center">Mail</h1>
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value='{{ old('title') }}'>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" placeholder="Description" id="description" name="description" value='{{ old('description') }}'></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection