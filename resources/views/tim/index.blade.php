@extends('layouts.base')
@section('container')
    Index Proyek
    <table id='proyekTable' class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Anggota</th>
                <th>Tugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tims as $tim)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$tim->nama}}</td>
                <td>{{$tim->anggota}}</td>
                <td>{{$tim->deadline}}</td>
                <td>
                    <a class='btn btn-warning' href="{{route('proyek.edit', $tim)}}">Update</a>
                    <form method='post' action="{{route('proyek.destroy', $tim)}}">
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