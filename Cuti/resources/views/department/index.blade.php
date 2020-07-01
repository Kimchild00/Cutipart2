@extends('layouts.master')
@section('title','hal index')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container">
      <a class="btn btn-primary" href="/admin/department/create">Tambah</a>
      @if(session()->has('pesan'))
        <div class="alert alert-success">
          {{ session()->get('pesan') }}
        </div>
        {{-- @ifelse
        <div class="alert alert-success">
          {{ session()->get('hpus') }} --}}
        </div>
      @endif
      <table class="table table-striped table-bordered">
                
        <thead>
            <tr>
                <th>No</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

</div>
@endsection