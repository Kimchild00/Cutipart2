@extends('layouts.master')
@section('title','hal index')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container">
      <a class="btn btn-primary" href="{{ route('mail.create') }}">Tambah</a>
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
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mail as $mails)
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{ $mails->id }}</td>
                <td>{{ $mails->title }}</td>
                <td>{{ $mails->description }}</td>
            @endforeach
        </tbody>
    </table>

</div>
@endsection