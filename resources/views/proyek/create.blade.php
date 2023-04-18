@extends('layouts.base')
@section('container')
    Create Proyek
    <form action="{{route('proyek.store')}}" method="post">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name='nama'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'></textarea>
            </div>
            <div class="mb-3">
                <label for="birthdaytime">Deadline</label> <br>
                <input type="datetime-local" name='deadline'>
            </div>
            <div>
                <button class='btn btn-primary' type="submit">Buat Proyek</button>
            </div>
        </div>

    </form>
@endsection
@section('extra')
@endsection