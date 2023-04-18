@extends('layouts.base')
@section('container')
    Index Proyek
    Copyright (c) 2023 Alfi Syifana Ghozwy
    Yang copas dijamin palsu pak
    <table id='proyekTable' class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Deadline</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyeks as $proyek)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$proyek->nama}}</td>
                <td>{{$proyek->deskripsi}}</td>
                <td>{{$proyek->deadline}}</td>
                <td>
                    <a class='btn btn-warning' href="{{route('proyek.edit', $proyek)}}">Update</a>
                    <form method='post' action="{{route('proyek.destroy', $proyek)}}">
                        @csrf
                        @method('delete')
                        <button class='btn btn-danger'>Delete</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('extra')
    <script>
        $(document).ready(function () {
            $('#proyekTable').DataTable();
        });
    </script>
@endsection