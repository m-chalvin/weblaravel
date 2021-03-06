@extends('layout/app')

@section('title','Detail Siswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Siswa</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $Siswa->nik }}</b></h4>
              <p class="card-text">{{ $Siswa->nama }}</p>
              <p class="card-text">{{ $Siswa->alamat }}</p>
              <p class="card-text">{{ $Siswa->handphone }}</p>


              <a href="{{ $siswa->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $siswa->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/siswa" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection