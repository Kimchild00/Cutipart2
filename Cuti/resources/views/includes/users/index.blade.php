@extends('layouts.master')
@section('title','hal index')
@section('jabatan', 'active')

@section('contentadmin')
<div class="container">
      {{-- <a class="btn btn-primary" href="{{ route('mail.create') }}">Tambah</a> --}}
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
                <th>Nama</th>
                <th>Divisi</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $users->name }}</td>
                <td>
                    <form action="POSTS">
                        <select class="custom-select" id="validationCustom04" name="nama_divisi" required>
                            <option value="it" {{ old('nama_divisi') }}>IT</option>
                            <option value="human_resource" {{ old('nama_divisi') }}>Human Resource</option>
                            <option value="manager" {{ old('nama_divisi') }}>Manager</option>
                          </select>
                          <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </td>
                <td>{{ $users->email }}</td>
                {{-- <td>{{ $userss->description }}</td> --}}
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->divisi_id }}</td>
                    <td>{{ $users->email }}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection