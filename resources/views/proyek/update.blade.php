@extends('layouts.base')
@section('container')
    Create Proyek
    <form action="{{route('proyek.update', $proyek)}}" method="post">
        @csrf
        @method('put')
        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name='nama' value='{{$proyek->nama}}'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'>{{$proyek->deskripsi}}</textarea>
            </div>
            <div class="mb-3">
                <label for="birthdaytime">Deadline</label> <br>
                <input type="datetime-local" name='deadline' value="{{$proyek->deadline}}">
            </div>
            <div>
                <button class='btn btn-primary' type="submit">Update</button>
            </div>
        </div>

    </form>
@endsection
@section('extra')
@endsection